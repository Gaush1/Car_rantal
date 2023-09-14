<?php

use App\Http\Controllers\AccountDashboardController;
use App\Http\Controllers\CompanyAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\CarSingleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminDashbordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Basic Routes to nevigate over Pages
Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/cars',[CarsController::class,'index']);
Route::get('/car-single',[CarSingleController::class,'index']);
Route::get('/booking',[BookingController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);

// Route to Get Register and Login Page
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'register'])->name('register_submit');
Route::get('/login', [RegisterController::class, 'login'])->name('login');
Route::post('/login', [RegisterController::class, 'loginSubmit'])->name('login_submit');
Route::get('/dashboard', [RegisterController::class, 'dashboard'])->name('dashboard')->middleware(['auth','verified']);
 Route::get('/logout',[RegisterController::class, 'logout'])->name('logout');
Route::get('/verify/{token}/{email}', [RegisterController::class, 'verifyAccount'])->name('verify_account');
// Route::get('/login',[LoginController::class,'index'])->name('login');

//User Dashboard Pages
// Route::get('/dashboard/myprofile',[AccountDashboardController::class,'showProfile'])->name('show_profile');
Route::get('/dashboard/profile',function(){
      return view('frontend/account-profile');
});
Route::get('/dashboard/myorder', function(){
    return view('frontend/account-booking');
});

// Route::get('/order',function(){
//     return view('frontend.account-booking');
// });

// Route::middleware(['auth'])->group(function () {
//     Route::get('/admin', [AdminDashbordController::class,'index'])->name('admin.index');
// });
Route::get('/admin/login', [AdminDashbordController::class,'LoginForm'])->name('admin.login.form');
Route::post('/admin/login', [AdminDashbordController::class,'adminlogin'])->name('admin.login');
Route::middleware(['auth:admin'])->group(function () {
    
Route::get('/admin/logout', [AdminDashbordController::class,'adminlogout'])->name('admin.logout');

});

//Company Based Routes
Route::get('/index/company',function(){
    return view('frontend/corporateindex');
});
// Route::get('/company/register',function(){
//     return view('frontend/corporateregister');
// });
Route::get('/company/register', [CompanyAuthController::class,'index'])->name("company.register");
Route::post('/company/register', [CompanyAuthController::class,'register'])->name("company.register.submit");
Route::get('/dashbord/company',[CompanyAuthController::class,'dashbordcompany'])->name('company.dashbord')->middleware(['','verified']);;
// 
Route::get('/verify/{token}/{email}', [CompanyAuthController::class, 'verifyAccountCompany'])->name('verify_account_company');
Route::get('/company/login', [CompanyAuthController::class, 'login'])->name('login_company');
Route::post('/company/login', [CompanyAuthController::class, 'loginSubmitCompany'])->name('login_submit_company');
Route::get('/logout/company',[CompanyAuthController::class, 'logout'])->name('logout_company');

