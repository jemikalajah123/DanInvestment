<?php

namespace App\Http\Controllers;

use App\Investment;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    private $interest;
    private $start;
    private $end;
    private $deposit;
    private  $earning;
    public function index(){
        return view('welcome');
    }
    public function estimate(){
        return view('pages.estimate');
    }
    public function  calculate(){
        $diff = abs(strtotime($this->end) - strtotime($this->start));
        $duration = round(($diff / (365 * 60* 60 * 24)),3); //duration is constant for 6 months
        $earning = $this->deposit * (1 + ($this->interest/100)) ** ($duration);
        $this->setEarning($earning);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getEstimate(Request $request){
        $this->deposit = $request->input('amount');
        $this->interest = $request->input('interest');
        $this->start = $request->input('start');
        $this->end = $request->input('end');
        $this->calculate();
        $earn = $this->getEarning();
        $end = $this->end;
        $amount= $this->deposit;
        return view('pages.estimate')->with(['earn' => $earn,'amount' => $amount]);
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
            return  view('pages.estimate')->with('failure', 'Please enter an amount greater than N49999');
        }else{
            $this->interest = 20;
            $this->calculate();
            $date = new DateTime('now');
            $date->modify('+1 month'); // or you can use '-30 day' for deduct
            $date = $date->format('Y-m-d h:i:s');
            //call to db
            $invest = new Investment();
            $invest->user_id = auth()->user()->id;
            $invest->present_value = $this->deposit;
            $invest->future_value = $this->getEarning();
            $invest->payment_made_status = false;
            $invest->pay_day = $date;
            $invest->save();

            $account = [ 'name' => 'Philip Jemikalajah',
                            'bank' => 'Zenith Bank',
                            'number' => '2110491426'
                ];
            return  view('pages.estimate')->with('success', 'Please make payment to ' + $account.name + ' whose bank name is ' + $account.bank + ' and account number is ' + $account.number + ' .' );

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
