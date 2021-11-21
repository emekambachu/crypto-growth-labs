<?php

namespace App\Http\Controllers;

use App\Investment;
use App\InvestmentPackage;
use App\Transaction;
use App\User;
use App\Withdrawal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Http\RedirectResponse
     */

    public function index(){

        // Check if users is logged in
        if(Auth::check()){
            $user = Auth::user();
        }else{
            return redirect()->route('login');
        }

        $investments = Investment::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

        $approvedInvestments = Investment::where([
            ['user_id', Auth::user()->id],
            ['is_approved', true],
        ]);

        $totalInvestments = $approvedInvestments->sum('amount');
        $myInvestments = $approvedInvestments->orderBy('created_at', 'desc')->get();

        // investment query object
        $recentInvestment = Investment::where([
            ['user_id', Auth::user()->id],
            ['is_approved', true],
        ])->orderBy('updated_at', 'desc')->first();

        // if there is a recent investment, get the date created and number of hours it takes to complete the investment
        if($recentInvestment){
            // add the given turnover time to last updated_at or last time an investment was created
            $stopMiningTime = date('F d, Y h:i:s', strtotime($recentInvestment->updated_at . ' +'.$recentInvestment->investmentPackage->days_turnover.' hours'));
            // convert mining approved investment updated_at
            $miningApprovedTime = date('F d, Y h:i:s', strtotime($recentInvestment->updated_at));

            // get current time
            $now = date('F d, Y h:i:s', strtotime(Carbon::now()));
        }else{
            $stopMiningTime = '';
            $miningApprovedTime = '';
            $now = '';
        }

        $total_withdrawals = Withdrawal::where([
            [ 'user_id', Auth::user()->id],
            [ 'is_approved', 1],
        ])->orderBy('created_at', 'desc')->get();

        $transactions = Transaction::where('user_id', $user->id)->orderBy('created_at', 'desc')->limit(6)->get();

        return view('users.index',
            compact('user', 'investments', 'totalInvestments', 'recentInvestment', 'total_withdrawals', 'transactions', 'stopMiningTime', 'miningApprovedTime', 'now', 'myInvestments'));
    }

    public function withdrawBalance(){

        // Check if users is logged in
        if(Auth::check()){
            $user = Auth::user();
        }else{
            return redirect()->route('login');
        }

        return view('users.withdrawal', compact('user'));
    }

    public function withdrawBalanceSubmit(Request $request){

        if($request->input('amount') > Auth::user()->wallet->amount){
            //session notification
            Session::flash('warning', 'Insufficient Funds');
            return redirect()->back();
        }

        $withdraw = Withdrawal::create([
            'user_id' => Auth::user()->id,
            'cryptocurrency' => $request->input('cryptocurrency'),
            'cryptocurrency_address' => $request->input('cryptocurrency_address'),
            'amount' => $request->input('amount'),
            'is_approved' => 0,
        ]);

        Transaction::addTransaction($withdraw->user_id, $withdraw->amount, 0, 'You made a withdrawal request');

        $data = [
            'amount' => $withdraw->amount,
            'is_approved' => $withdraw->is_approved,
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
        ];

        // Send Email to registered User
        Mail::send('emails.users.withdrawal-request', $data, static function ($message) use ($data) {
            $message->from('info@cryptogrowthlabs.com', 'Crypto Growth Labs');
            $message->to($data['email'], $data['name'])->cc('support@cryptogrowthlabs.com');
            $message->replyTo('support@cryptogrowthlabs.com', 'Crypto Growth Labs');
            $message->subject('Withdrawal request of '.$data['amount']);
        });

        Session::flash('success', 'Your withdrawal request has been successful');
        return redirect()->back();
    }

    public function accountSettings(){

        // Check if users is logged in
        if(Auth::check()){
            $user = Auth::user();
        }else{
            return redirect()->route('login');
        }

        return view('users.account-settings', compact('user'));
    }

    public function updateAccount(Request $request){

        //Get Image
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
            $data['image'] = Auth::user()->image;
        }

        //Vlaid ID
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
            $data['valid_id'] = Auth::user()->valid_id;
        }

        if(!empty($request->input('password'))){
            $input['password'] = bcrypt($request->input('password'));
        }else{
            $input['password'] = Auth::user()->password;
        }

        if(!empty($request->input('country'))){
            $input['country'] = $request->input('country');
        }else{
            $input['country'] = Auth::user()->country;
        }

        if(!empty($request->input('state'))){
            $input['state'] = $request->input('state');
        }else{
            $input['state'] = Auth::user()->state;
        }

        $input['name'] = $request->input('name');
        $input['email'] = $request->input('email');
        $input['mobile'] = $request->input('mobile');
        $input['address'] = $request->input('address');

        $input['bitcoin_wallet'] = $request->input('bitcoin_wallet');
        $input['ethereum_wallet'] = $request->input('ethereum_wallet');

        User::where([
            ['id', '=', Auth::user()->id]
        ])->update($input);

        Session::flash('success', 'Your User Details has been updated');
        return redirect()->back();
    }

}
