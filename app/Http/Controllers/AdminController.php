<?php

namespace App\Http\Controllers;
use App\Investment;
use App\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        $investment = Investment::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard')->with('investment',$investment);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePayment($id){
        $investment = Investment::find($id);
        if($investment->confirm_payment_status == true){
            return redirect('/admin/dashboard')->with('error', 'Investment Payout Info has been Updated already');
        }
        $investment->confirm_payment_status = true;
        $investment->save();
        return redirect('/admin/dashboard')->with('success', 'Investment Payout Info Updated');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *  * @param  int  $user_id
     * @return \Illuminate\Http\Response
     */
    public function sendEmail($id,$user_id){
        $investment = Investment::find($id);
        $user = User::find($user_id);
        $details = [
            'title' => 'Mail from Dan Investment',
            'body' => 'Your investment money was received successfully, Thanks for trusting dan Investment firm.'
        ];
        if($investment->payment_made_status == false || $investment->send_email_status == false){
            $investment->payment_made_status = true;
            $investment->send_email_status = true;
            $investment->save();
            \Mail::to($user->email)->send(new \App\Mail\InvestmentMail($details));
//
//            dd("Email is Sent.");
        }else{
            return redirect('/admin/dashboard')->with('error', 'Payment email Confirmation has been sent already');

        }

    }
}
