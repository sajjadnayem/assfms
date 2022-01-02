<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\User\DonorController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\website\UserController;
use App\Http\Controllers\Volunteer\VolunteerController;
Use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Models\Cause;
use App\Models\Donation;
use App\Models\Volunteer;
use App\Models\Category;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'Home'])->name('manage.home');
Route::group(['prefix'=> 'user'], function(){
    Route::get('/', function(){
        return view('website.master');
    })->name('website');
    
    Route::get('/create/donor_profile', [HomeController::class, 'CreateDonor'])->name('create.donor');
    Route::post('/store/donor', [UserController::class, 'StoreDonor'])->name('store.donor');
    Route::post('/donor/login', [UserController::class, 'DonorLogin'])->name('donor.login');
    Route::get('/donor/logout', [UserController::class, 'DonorLogout'])->name('donor.logout');
    // Route::get('/donor/create_Profile', [UserController::class, 'CreateDonor'])->name('donor.createprofile');
    // Route::get('/donor/view_profile', [UserController::class, 'ViewDonorProfile'])->name('donor.viewprofile');

    Route::get('/cause/view/details/{cause_id}', [HomeController::class, 'CauseDetails'])->name('cause.details');
});

//for admin login
Route::get('/admin/login', [AdminUserController::class, 'login'])->name('admin.login');
Route::post('/admin/dologin', [AdminUserController::class, 'dologin'])->name('admin.dologin');

Route::group(['prefix'=> 'admin', 'middleware'=>'auth'], function(){
    Route::get('/dashboard', function(){
        return view('master');
    })->name('home');

    Route::get('/logout', [AdminUserController::class, 'logout'])->name('admin.logout');

    Route::get('/', [AdminController::class, 'Cause'])->name('manage.cause');
    Route::get('/create/cause',[AdminController::class, 'CreateCause'])->name('cause.create');
    Route::get('/view/cause', [AdminController::class, 'ViewCause'])->name('cause.view');
    Route::post('/cause/store', [AdminController:: class, 'StoreCause'])->name('cause.store');
    Route::get('/cause/view/details/{cause_id}',[AdminController::class,'CauseView'])->name('view.cause');
    Route::get('/cause/delete/{cause_id}',[AdminController::class,'DeleteCause'])->name('delete.cause');


    // Route::get('donor/registration', [DonorController::class, 'Registration']);
    Route::get('/donorlogin', [DonorController::class, 'DonorLogin']);
    Route::get('/donor/profile', [DonorController::class, 'DonorProfile'])->name('donor.profile');
    Route::get('/donor/create_Profile', [DonorController::class, 'CreateDonor'])->name('donor.createprofile');
    Route::get('/donor/view_profile', [DonorController::class, 'ViewDonorProfile'])->name('donor.viewprofile');
    Route::get('/donor/view', [UserController::class, 'ViewDonorProfile'])->name('donor.view');
    //Route::post('/store/donor', [DonorController::class, 'StoreDonor'])->name('store.donor');
    Route::get('/view/donorprofile/{donor_id}', [UserController::class, 'DonorView'])->name('view.donor');
    Route::get('/delete/donorprofile/{donor_id}',[UserController::class,'DonorDelete'])->name('delete.donorprofile');
    Route::get('/donation', [DonorController::class, 'Donation'])->name('donor.donation');
    Route::get('/create/donation', [DonorController:: class, 'CreateDonation'])->name('donor.createdonation');
    Route::get('/view/donation', [DonorController::class, 'ViewDonation'])->name('donor.viewdonation');
    Route::post('/store/donation', [DonorController::class, 'StoreDonation'])->name('store.donation');
    Route::get('/view/donation/{donation_id}',[DonorController::class,'DonationView'])->name('view.donation');
    Route::get('/delete/donation/{donation_id}',[DonorController::class,'DeleteDonation'])->name('delete.donation');
    
    

    //For volunteer Controller
    Route::get('volunteerprofile', [VolunteerController:: class, 'VolunteerProfile'])->name('volunteer.profile');
    Route::get('/create/volunteer', [VolunteerController::class, 'CreateVolunteer'])->name('create.volunteer');
    Route::get('/view/volunteer', [VolunteerController::class, 'ViewVolunteer'])->name('view.volunteer');
    Route::post('/store/volunteer', [VolunteerController::class, 'StoreVolunteer'])->name('store.volunteer');
    Route::get('/view/volunteerprofile/{volunteer_id}',[VolunteerController::class,'VolunteerView'])->name('volunteer.view');
    Route::get('/delete/volunteerprofile/{volunteer_id}',[VolunteerController::class,'DeleteVolunteer'])->name('delete.volunteer');


    //for categoryController
    Route::get('/create/category', [CategoryController::class, 'CreateCategory'])->name('create.category');
    Route::get('category/list', [CategoryController::class, 'CategoryList'])->name('category.list');
    Route::post('/store/category', [CategoryController::class, 'StoreCategory'])->name('store.category');


});


// Route::get('/', function () {
//     return view('master');
// });
