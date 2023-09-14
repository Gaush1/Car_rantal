<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailVarificationController extends Controller
{
    public function index(){
        return view('frontend/verify-email');
    }
}
