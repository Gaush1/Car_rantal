<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Hash;
use App\Models\Companye;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Websitemailer;

class CompanyAuthController extends Controller
{
    public function index(){
        return view('frontend/corporateregister');
    }

    public function register(Request $request)
{
    $token = hash('sha256',time());
    // Validate Customers Input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:companyes',
        'username' => 'required|string|max:255|unique:companyes',
        'phone' => 'required|string|max:255|min:10|unique:companyes',
        'password' => 'required|string|min:8',
        're-password' => 'required|same:password',
        'cname' => 'required|string|max:255',
        'city' => 'required|string|max:255',
    ]);

    // Create a new Company record in the database
    $user = new Companye();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->username = $request->username;
    $user->phone = $request->phone;
    $user->password = Hash::make($request->password); // Hash the password
    $user->cname = $request->cname;
    $user->city = $request->city;
    $user->token = $token;
    $user->save();

    $verificationLink = url('/verify/' . $token . '/' . $request->email . '/');
        $mailSubject = 'Car-Rental Registration Verification Link';
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'link' => $verificationLink
        ];
        Mail::to($request->email)->send(new Websitemailer($mailSubject, $userData));


        // return "Registered Succesfully. A verification Email will be send to your email Address".$request->email."Please Click on the click to verify";
        return view('frontend/registermailpage')->with($userData) ;

}

public function verifyAccountCompany($token, $email)
{
    //now we write our logic to empty the token and update the status as active
    $user = Companye::where('token', $token)->first();
    // ->where('email', $email)
    if (!$user) {
        // if the user not exist means token is not exist or invaild token
        dd('user not found or invalid token');
    }
    //else user found
    else {
        $user->token = ''; //empty user token
        $user->status = 'active';
        $user->update();
    }
    Auth::login($user);
    // return redirect()->route('company.dashbord');
    return view("frontend/companydashbord");
}

public function login(){
    return view('frontend/corporatelogin');
}

public function loginSubmitCompany(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    try {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('companye')->attempt($credentials)) {
            $user = Auth::user(); // Retrieve the authenticated company user

            if ($user->status == 'active') {
                session()->flash('success', 'Welcome back');
                return view('frontend/corporatelogin');
                // return redirect()->route('company.dashbord');
            } else {
                Auth::logout();
                session()->flash('error', 'Email address has not been verified. Please check your inbox for a verification email');
                return redirect()->route('login_company');
            }
        } else {
            session()->flash('error', 'Login Failed. Please check your Email & Password.');
            return redirect()->route('login_company');
        }
    } catch (\Throwable $th) {
        session()->flash('error', $th->getMessage());
        return redirect()->back();
    }
}

public function dashbordcompany(){

    return view('frontend/companydashbord');
}

public function logout(){
    try {
        Auth::guard('companye')->logout();
      
        return redirect()->route('login_company');
    } catch (\Throwable $th) {
        //show error message
    }
}



}
