<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\Websitemailer;
use App\Models\Car;
use App\Models\CarDetail;
use App\Models\Booking;
use Illuminate\Validation\Rules\Password;


class RegisterController extends Controller
{
    public function index(){
        return view('frontend/register');
    }

    public function register(Request $request)
    {
              
        $token = hash('sha256',time());
        // Validate Customer input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'phone' => 'nullable|string|max:255|unique:users',
            'password' => 'required|string|min:8',
            're-password' => 'required|same:password',
       ]);
       
       // Create a new Customer record in the database
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->username = $request->username;
       $user->phone = $request->phone;
       $user->password = Hash::make($request->password); // Hash the password
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
        return view('frontend/registermailpage',['userData' => $userData]);
       
        }

        // new method to verify user account
    //in this route we recieved token as parameter
    public function verifyAccount($token, $email)
    {
        //now we write our logic to empty the token and update the status as active
        $user = User::where('token', $token)->first();
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
        return redirect()->route('dashboard');
    }

    public function login(){
        return view('frontend/login');
    }

    public function loginSubmit(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        try {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            if (Auth::attempt($credentials)) {
                // $user = Auth::user();
                $user = auth()->user();
                if ($user->status == 'active') {
                   session()->flash('success','welcome back');
                    return redirect()->route('dashboard');
                } else {
                    Auth::logout();
                    session()->flash('error',' email address has not been verified. Please check your inbox for a verification email');
                    return redirect()->route('login');
                }
            } else {
                session()->flash('error','Login Failed. Please check your Email & Password.');
               return redirect()->route('login');
            }
        } catch (\Throwable $th) {
            session()->flash('error',$th->getMessage());
            return redirect()->back();
        }
   
    }
    public function dashboard(){

        $user = auth()->user();
        $bookedCars = $user->bookings;
    
        // return view('dashboard.bookings', compact('bookedCars'));
        return view('frontend/account-dashboard', compact('bookedCars'));
    }

    public function logout(){
        try {
            Auth::guard('web')->logout();
          
            return redirect()->route('login');
        } catch (\Throwable $th) {
            //show error message
        }
    }

    public function editProfile(){
        $user = auth()->user();
        return view('frontend/account-profile', compact('user'));
    }

    public function updateProfile(Request $request)
{
    $user = auth()->user(); // Retrieve the currently authenticated user

    // Validate the form input
    $request->validate([

            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'phone' => 'nullable|string|max:255|unique:users',
            'password' => 'required|string|min:8',
            're-password' => 'required|same:password',
    ]);

    // Update user data
    $user->update([
        'name' => $request->input('name'),
        'username' => $request->input('username'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'password' => $request->has('password') ? bcrypt($request->input('password')) : $user->password,
        ]);

    return redirect()->route('user.profile.edit')->with('success', 'Profile updated successfully.');
}

public function indexCar()
{
    $user = auth()->user();
    $cars = Car::all();
    return view('frontend/carbooking', ['cars' => $cars, 'user' => $user]);
    // return view('frontend/Adminview', ['users' => $users,'companyes' => $companyes]);
}

public function show($id)
{
    $user = auth()->user();
    $car = Car::findOrFail($id);
    $carDetail = $car->carDetail;
    return view('frontend/carsinglebook', compact('car', 'carDetail', 'user'));
}

public function bookcar(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'user_id' => 'required|integer',
        'car_id' => 'required|integer',
        'total_price' => 'required|numeric',
        'pickuplocation' => 'required|string',
        'dropofflocation' => 'required|string',
        'pickup_date' => 'required|date_format:Y-m-d\TH:i',
        'return_date' => 'required|date_format:Y-m-d\TH:i',
        'status' => 'required|in:completed,cancelled,scheduled',
    ]);

    // Create a new booking record in the database
    $booking = Booking::create([
        'user_id' => $request->user_id,
        'car_id' => $request->car_id,
        'car_name' => $request->car_name,
        'total_price' => $request->total_price,
        'pickuplocation' => $request->pickuplocation,
        'dropofflocation' => $request->dropofflocation,
        'pickup_date' => $request->pickup_date,
        'return_date' => $request->return_date,
        'status' => $request->status,
    ]);

    // Optionally, you can return a response or redirect to a confirmation page
    return redirect()->back()->with('success', 'Car booked successfully!');
}

public function order(){
    $user = auth()->user();
    $bookedCars = $user->bookings;

    // return view('dashboard.bookings', compact('bookedCars'));
    return view('frontend/account-booking', compact('bookedCars'));
}

    public function filterCars(Request $request)
{
    // Get the selected vehicle types from the form
    $selectedTypes = $request->input('types', []);

    // Get the selected car body types
    $selectedBodyTypes = $request->input('bodytypes', []);

     // Get the selected car seats options
    $selectedSeats = $request->input('capacity', []);
    
    // Get the price range
    $minPrice = $request->input('min_price', 0);
    $maxPrice = $request->input('max_price', 2000);

     // Query the cars table based on selected filters
     $query = Car::query();

     if (!empty($selectedTypes)) {
        $query->whereIn('type', $selectedTypes);
    }

    if (!empty($selectedBodyTypes)) {
        $query->whereIn('bodytype', $selectedBodyTypes);
    }

    if (!empty($selectedSeats)) {
        $query->whereIn('capacity', $selectedSeats);
    }

    $query->whereBetween('price', [$minPrice, $maxPrice]);

    // Retrieve the filtered cars
    $filteredCars = $query->get();

        // Pass the filtered cars to the view
        return view('frontend/carbooking', ['cars' => $filteredCars]);

    // if (empty($selectedTypes)) {
    //     // No filters selected, so retrieve all cars
    //     $filteredCars = Car::all();
    // } else {
    //     // Query the cars table with the selected types
    //    $filteredCars = Car::whereIn('type', $selectedTypes)->get();
    // }
    
}

}
