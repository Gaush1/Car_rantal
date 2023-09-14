<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarSingleController extends Controller
{
     public function index(){
        return view('frontend/car-single');
    }
}
