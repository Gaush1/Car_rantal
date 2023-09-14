<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountDashboardController extends Controller
{
    // public function index(){
    //     return view('frontend/account-dashboard');
    // }

    public function showProfile(){
        return view('frontend/account-profile');
    } 
    public function Myordershow(){
        return view('frontend/account-booking');
    } 
}
