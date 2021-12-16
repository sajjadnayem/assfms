<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\User\DonorController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Volunteer\VolunteerController;

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
    
    Route::get('/create/signup', [HomeController::class, 'Signup'])->name('create.signup');
});


Route::group(['prefix'=> 'admin'], function(){

    Route::get('/function', function(){
        return view('master');
    })->name('home');
    Route::get('/', [AdminController::class, 'Cause'])->name('manage.cause');
    Route::get('/create/cause',[AdminController::class, 'CreateCause'])->name('cause.create');
    Route::get('/view/cause', [AdminController::class, 'ViewCause'])->name('cause.view');
    Route::post('/cause/store', [AdminController:: class, 'StoreCause'])->name('cause.store');


    // Route::get('donor/registration', [DonorController::class, 'Registration']);
    // Route::get('/donorlogin', [DonorController::class, 'DonorLogin']);
    Route::get('/donor/profile', [DonorController::class, 'DonorProfile'])->name('donor.profile');
    Route::get('/donor/create_Profile', [DonorController::class, 'CreateDonor'])->name('donor.createprofile');
    Route::get('/donor/view_profile', [DonorController::class, 'ViewDonorProfile'])->name('donor.viewprofile');
    Route::post('/store/donor', [DonorController::class, 'StoreDonor'])->name('store.donor');
    Route::get('/view/donorprofile/{donor_id}', [DonorController::class, 'DonorView'])->name('view.donor');
    Route::get('/delete/donorprofile/{donor_id}',[DonorController::class,'DonorDelete'])->name('delete.donorprofile');
    Route::get('/donation', [DonorController::class, 'Donation'])->name('donor.donation');
    Route::get('/create/donation', [DonorController:: class, 'CreateDonation'])->name('donor.createdonation');
    Route::get('/view/donation', [DonorController::class, 'ViewDonation'])->name('donor.viewdonation');
    Route::post('/store/donation', [DonorController::class, 'StoreDonation'])->name('store.donation');
    Route::get('/view/donation/{donation_id}',[DonorController::class,'DonationView'])->name('view.donation');
    Route::get('/delete/donation/{donation_id}',[DonorController::class,'DeleteDonation'])->name('delete.donation');
    
    



    Route::get('volunteerprofile', [VolunteerController:: class, 'VolunteerProfile'])->name('volunteer.profile');
    Route::get('/create/volunteer', [VolunteerController::class, 'CreateVolunteer'])->name('create.volunteer');
    Route::get('/view/volunteer', [VolunteerController::class, 'ViewVolunteer'])->name('view.volunteer');
    Route::post('/store/volunteer', [VolunteerController::class, 'StoreVolunteer'])->name('store.volunteer');


    //for categoryController
    Route::get('/create/category', [CategoryController::class, 'CreateCategory'])->name('create.category');
    Route::get('category/list', [CategoryController::class, 'CategoryList'])->name('category.list');
    Route::post('/store/category', [CategoryController::class, 'StoreCategory'])->name('store.category');


});


// Route::get('/', function () {
//     return view('master');
// });
