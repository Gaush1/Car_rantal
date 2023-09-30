<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Companybooking;
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
    $company = new Companye();
    $company->name = $request->name;
    $company->email = $request->email;
    $company->username = $request->username;
    $company->phone = $request->phone;
    $company->password = Hash::make($request->password); // Hash the password
    $company->cname = $request->cname;
    $company->city = $request->city;
    $company->token = $token;
    $company->save();

       
    $verificationLink = url('/verifyCompany/' . $token . '/' . $request->email . '/');
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
        Auth::guard('companye')->login($user);
        return redirect()->route('company.dashbord');
        // return view('frontend/companydashbord');
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
            $user = Auth::guard('companye')->user(); // Use the 'companye' guard
            if ($user->status == 'active') {
                session()->flash('success', 'Welcome back');
                return redirect()->route('company.dashbord');
            } else {
                Auth::guard('companye')->logout(); // Logout from the 'companye' guard
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
    $user = Auth::guard('companye')->user();
    $bookedCars = $user->companybooking;
    return view('frontend/companydashbord', compact('bookedCars'));
    // return view('frontend/companydashbord');
}

public function logout(){
    try {
        Auth::guard('companye')->logout();
      
        return redirect()->route('login_company');
    } catch (\Throwable $th) {
        //show error message
    }
}

public function editProfileCompany(){
    $user = Auth::guard('companye')->user();
    return view('frontend/company-profile', compact('user'));
}
public function companybooking(){
    $user = Auth::guard('companye')->user();
    $bookedCars = $user->companybooking;
    // return view('frontend/corporatebooking', compact('user'));
    return view('frontend/corporatebooking', ['user' => $user, 'bookedCars' => $bookedCars]);
}

public function updateProfileCompany(Request $request)
{
    $user = Auth::guard('companye')->user();
    // Retrieve the currently authenticated user

    // Validate the form input
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

    // Update user data
    $user->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'username' => $request->input('username'),
        'phone' => $request->input('phone'),
        'password' => $request->has('password') ? bcrypt($request->input('password')) : $user->password,
        'cname' => $request->input('cname'),
        'city' => $request->input('city'),
        ]);

    return redirect()->route('company.profile.edit')->with('success', 'Profile updated successfully.');
}

public function bookcar(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'companye_id' => 'required|integer',
        'car_id' => 'required|integer',
        'total_price' => 'required|numeric',
        'pickuplocation' => 'required|string',
        'dropofflocation' => 'required|string',
        'pickup_date' => 'required|date_format:Y-m-d\TH:i',
        'return_date' => 'required|date_format:Y-m-d\TH:i',
        'status' => 'required|in:completed,cancelled,scheduled',
    ]);

    // Create a new booking record in the database
    $booking = Companybooking::create([
        'companye_id' => $request->companye_id,
        'car_id' => $request->car_id,
        'car_name' => $request->car_name,
        'total_price' => $request->total_price,
        'pickuplocation' => $request->pickuplocation,
        'dropofflocation' => $request->dropofflocation,
        'pickup_date' => $request->pickup_date,
        'return_date' => $request->return_date,
        'status' => $request->status,
    ]);

    //  return a response or redirect to a confirmation page
    return redirect()->back()->with('success', 'Car booked successfully!');
}

}
