<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function admin(){
        return view('backend.admin');
    }
    public function main(){
        return view('backend.main');
    }
}
