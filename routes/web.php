<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\User\DonorController;
use App\Http\Controllers\Admin\AdminController;
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

Route::get('/', function () {
    return view('master');
});
Route::get('/crisis', [AdminController::class, 'Crisis']);
Route::get('/create/crisis',[AdminController::class, 'CreateCrisis']);
Route::get('/view/crisis', [AdminController::class, 'ViewCrisis'])->name('crisis.view');
Route::post('/crisis/store', [AdminController:: class, 'CrisisStore'])->name('crisis.store');


// Route::get('donor/registration', [DonorController::class, 'Registration']);
// Route::get('/donorlogin', [DonorController::class, 'DonorLogin']);
Route::get('/donor/profile', [DonorController::class, 'DonorProfile'])->name('donor.profile');
Route::get('/donor/create_Profile', [DonorController::class, 'CreateDonor'])->name('donor.createprofile');
Route::get('/donor/view_profile', [DonorController::class, 'ViewDonorProfile'])->name('donor.viewprofile');
Route::post('/store/donor', [DonorController::class, 'StoreDonor'])->name('store.donor');
Route::get('/donation', [DonorController::class, 'Donation'])->name('donor.donation');
Route::get('/create/donation', [DonorController:: class, 'CreateDonation'])->name('donor.createdonation');
Route::get('/view/donation', [DonorController::class, 'ViewDonation'])->name('donor.viewdonation');
Route::post('/store/donation', [DonorController::class, 'StoreDonation'])->name('store.donation');



Route::get('volunteerprofile', [VolunteerController:: class, 'VolunteerProfile'])->name('volunteer.profile');
Route::get('/create/volunteer', [VolunteerController::class, 'CreateVolunteer'])->name('create.volunteer');
Route::get('/view/volunteer', [VolunteerController::class, 'ViewVolunteer'])->name('view.volunteer');
Route::post('/store/volunteer', [VolunteerController::class, 'StoreVolunteer'])->name('store.volunteer');


//for categoryController
Route::get('/create/category', [CategoryController::class, 'CreateCategory'])->name('create.category');
Route::get('category/list', [CategoryController::class, 'CategoryList'])->name('category.list');
Route::post('/store/category', [CategoryController::class, 'StoreCategory'])->name('store.category');

