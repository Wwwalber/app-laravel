<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditalController extends Controller
{
    public function index(){
        return view('site/edital');
    }
}
