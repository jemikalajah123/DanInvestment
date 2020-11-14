<?php

namespace App\Http\Controllers;

use App\Investment;
use Illuminate\Http\Request;
use DateTime;

class PagesController extends Controller
{
    private $interest = 20;
    private $deposit;
    private  $earning;
    public function index(){
        return view('welcome');
    }
    public function estimate(){
        return view('pages.estimate');
    }
    public function  calculate(){
        $earning = $this->deposit + (($this->interest/100) * $this->deposit);
        $this->setEarning(round($earning),2);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->deposit = $request->input('amount');
        if($this->deposit < 50000){
            return  redirect('/estimate')->with(['error' => 'Please enter an amount greater than N49999']);
        }else{
            $date = new DateTime('now');
            $days = 35;
            $start_date = $date->format('Y-m-d h:i:s');
            $end_date = $date->modify('+'.$days.'day')->format('Y-m-d h:i:s'); // or you can use '-30 day' for deduct
            $this->calculate();
            //call to db
            $invest = new Investment();
            $invest->user_id = auth()->user()->id;
            $invest->present_value = $this->deposit;
            $invest->future_value = $this->getEarning();
            $invest->payment_made_status = false;
            $invest->pay_day = $end_date;
            $invest->save();

            $account = [ 'name' => 'Philip Jemikalajah',
                            'bank' => 'Zenith Bank',
                            'number' => '2110491426'
                ];
            return  redirect('/estimate')->with('success', 'Your investment is successful, Please make payment to ' . $account['name'] . ' whose bank name is ' . $account['bank'] . ' and account number is ' . $account['number'] . ' .' );

        }
    }
    public function about(){
        $title = "About Us";
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array (
            'title'=> 'Our Services',
            'services' => ['Forex Trading','Product management and design', 'Business Consulting', 'Marketing Intelligence']
        );
        return view('pages.services')->with( $data);
    }

    /**
     * @param array $answer
     */
    public function setEarning($answer)
    {
        $this->earning = $answer;
    }

    /**
     * @return array
     */
    public function getEarning()
    {
        return $this->earning;
    }
}
