<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\UserReferral;
use App\UserWalletAddress;
use App\Wallet;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::REGISTER;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'referer' => ['nullable'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'mobile' => ['nullable', 'min:10', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            'image'  => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:5048'],
            'valid_id'  => ['nullable', 'mimes:jpg,jpeg,png,pdf', 'max:5048'],
            'country' => ['required', 'string'],
            'state' => ['nullable', 'string'],
            'address' => ['nullable', 'string', 'max:100'],
            'wallet_address.*.name' => ['nullable'],
            'wallet_address.*.address' => ['nullable'],
        ]);
    }

    /**
     * Create a new users instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //Get Image from form field
        if($file = request()->file('image')){

            if(!File::exists('photos')) {
                // create path
                File::makeDirectory('photos', $mode = 0777, true, true);
            }

            // Add current time in seconds to image
            $name = time() . $file->getClientOriginalName();

            //Move image to photos directory
            $file->move('photos', $name);

            $data['image'] = $name;
        }else{
            //If no image has been uploaded, it should be null
            $data['image'] = NULL;
        }

        if($file = request()->file('valid_id')){

            if(!File::exists('photos')) {
                // create path
                File::makeDirectory('photos', $mode = 0777, true, true);
            }

            // Add current time in seconds to image
            $name = time() . $file->getClientOriginalName();

            //Move image to photos directory
            $file->move('photos', $name);

            $data['valid_id'] = $name;
        }else{
            //If no image has been uploaded, it should be null
            $data['valid_id'] = NULL;
        }

        //Generate Ref for user slug
        function ref($length = 8){
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = 'CGL';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        // Create User
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'referral_number' => ref(),
            'password' => Hash::make($data['password']),
            'password_backup' => $data['password'],
            'image' => $data['image'],
            'valid_id' => $data['valid_id'],
            'mobile' => $data['mobile'],
            'country' => $data['country'],
            'state' => $data['state'],
            'address' => $data['address'],
        ]);

        // Submit multiple crypto wallet addresses using for loop
        if(!empty($data['wallet_address'])){
            for($i = 0, $count = count($data['wallet_address']); $i < $count; $i++){
                if(!empty($data['wallet_address'][$i]['name'])){
                    $data = [
                        'user_id' => $user->id,
                        'name' => $data['wallet_address'][$i]['name'],
                        'address' => $data['wallet_address'][$i]['address'],
                    ];
                    UserWalletAddress::create($data);
                }
            }
        }

        // Create Company Info
        Wallet::create([
            'user_id' => $user->id
        ]);

        // Check if referer number exists and include it
        if(!empty($data['referer'])){
            $refererExists = User::where('referral_number', $data['referer'])->first();
            if($refererExists){
                UserReferral::create([
                   'user_id' => $refererExists->id,
                   'referee_id' => $user->id,
                   'referee_number' => $user->referral_number,
                ]);
            }
        }

        $emailData = [
            'name' => $user->name,
            'email' => $user->email,
            'mobile' => $user->mobile,
            'country' => $user->country,
            'state' => $user->state,
            'password_backup' => $user->password_backup,
        ];

        // Send Email to registered User
        Mail::send('emails.users.registration-complete', $emailData, static function ($message) use ($emailData) {
            $message->from('info@cryptogrowthlabs.com', 'Crypto Growth Labs');
            $message->to($emailData['email'], $emailData['name']);
            $message->replyTo('support@cryptogrowthlabs.com', 'Crypto Growth Labs');
            $message->subject('Registration Complete');
        });

        // Send Email to Admin
        Mail::send('emails.users.new-user', $emailData, static function ($message) use ($emailData) {
            $message->from('info@cryptogrowthlabs.com', 'Crypto Growth Labs');
            $message->to('support@cryptogrowthlabs.com', 'Crypto Growth Labs');
            $message->subject('New User');
        });

        // add name and email to session
        session()->put('name', $user->name);

        return $user;
    }
}
