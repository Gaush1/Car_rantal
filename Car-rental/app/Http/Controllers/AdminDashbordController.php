<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Companye;
use App\Models\Companybooking;
use Hash;
use Auth;

class AdminDashbordController extends Controller
{
    public function LoginForm()
    {
        return view('frontend/adminlogin');

    }

    public function adminlogin(Request $request)
    {
        // Validate admin input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the admin
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication successful, redirect to admin dashboard or other admin-specific pages
          $users = User::all(); // Replace with your model and query
          $companyes = Companye::all();
          $bookings = Booking::all();
          $bookingcompany = Companybooking::all();
          $admin = Auth::guard('admin')->user();
          return view('frontend/Adminview', ['users' => $users,'companyes' => $companyes, "bookings"=>$bookings,'admin'=> $admin, 'bookingcompany' => $bookingcompany]);
        //   return view('frontend/Adminview');
        }

        // Authentication failed, return to the login form with an error message
        return redirect('/admin/login')->with('error', 'Invalid admin credentials');
    }

    public function adminlogout()
    {
        Auth::guard('admin')->logout(); // Log out the admin
        return redirect('/admin/login'); // Redirect to admin login page
    }

}