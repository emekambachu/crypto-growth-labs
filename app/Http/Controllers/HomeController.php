<?php

namespace App\Http\Controllers;

use App\InvestmentPackage;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function forgotPassword(){

        return view('auth.forgot-password');
    }

    public function recoverPassword(Request $request){

        $email = $request->input('email');

        $recover = User::where('email', $email)->get()->first();

        if(!$recover){
            Session::flash('warning', 'This email does not exists');
            return redirect()->back();
        }

        $data = [
            'name' => $recover->name,
            'email' => $recover->email,
            'password_backup' => $recover->password_backup,
        ];

        // Send Email user
        Mail::send('emails.users.recover-password', $data, static function ($message) use ($data) {
            $message->from('support@cryptogrowthlabs.com', 'Crypto Growth Labs');
            $message->to($data['email'], $data['name']);
            $message->replyTo('support@cryptogrowthlabs.com', 'Crypto Growth Labs');
            $message->subject('Your Password');
        });

        Session::flash('success', 'Your Password has been sent to your email');
        return redirect()->back();
    }

    public function investmentPackages()
    {
        $packages = InvestmentPackage::all();
        return view('investment-packages', compact('packages'));
    }

    public function contactForm(Request $request){

        $input = $request->all();

        $data = [
            'name' => $input['name'],
            'email' => $input['email'],
            'subject' => $input['subject'] ?? null,
            'email_message' => $input['email_message'],
        ];

        // Send Email Company
        Mail::send('emails.contact-form', $data, static function ($message) use ($data) {
            $message->from('info@bit-farms.ltd', 'Crypto Growth Labs');
            $message->to('support@cryptogrowthlabs.com', 'Crypto Growth Labs');
            $message->replyTo('noreply@bit-farms.ltd', 'Crypto Growth Labs');
            $message->subject('New Message From'. $data['name']);
        });

        Session::flash('success', 'Message Sent');
        return redirect('contact');
    }

    public function home(){
        $packages = InvestmentPackage::all();
        return view('home', compact('packages'));
    }
}
