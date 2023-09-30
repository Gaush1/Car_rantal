<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class IndexController extends Controller
{
    public function index(){
        $cars = Car::all();
        return view('frontend/index', ['cars' => $cars]);
        // return view('');
    }

    public function companyindex(){
        $cars = Car::all();
        return view('frontend/corporateindex', ['cars' => $cars]);
    }
}
