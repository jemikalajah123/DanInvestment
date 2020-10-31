<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function estimate(){
        return view('pages.estimate');
    }
    public function about(){
        $title = "About Us";
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array (
            'title'=> 'Our Services',
            'services' => ['Blogging','Web design', 'Programming', 'Marketing Intelligence']
        );
        return view('pages.services')->with( $data);
    }
}
