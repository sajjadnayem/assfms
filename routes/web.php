<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/registration', [DonorController::class, 'Registration']);
Route::get('/donorlogin', [DonorController::class, 'DonorLogin']);
Route::get('/volunteer/registration', [VolunteerController::class, 'Registration']);
Route::get('volunteerlogin', [VolunteerController::class, 'VolunteerLogin']);
Route::post('/crisis/store', [AdminController:: class, 'CrisisStore'])->name('crisis.store');
