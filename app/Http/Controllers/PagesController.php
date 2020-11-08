<?php

namespace App\Http\Controllers;

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
        return $this->earning = $this->deposit * (1 + ($this->interest/100)) ** ($duration);
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
        $earn = $this->earning;
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
        return view('pages.estimate');
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
