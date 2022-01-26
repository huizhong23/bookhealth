<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingAppointmentController;
use App\Http\Controllers\QrCodeGeneratorController;
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
    return view('auth/login');
});

Route::get('/login',[CustomAuthController::class, 'login']);
Route::get('/registration',[CustomAuthController::class, 'registration']);
Route::post('/register-user',[CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('login-user',[CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/homepage',[CustomAuthController::class, 'homepage']);
Route::get('/healthinfo',[CustomAuthController::class, 'healthinfo']);
Route::get('/serviceschedule',[CustomAuthController::class, 'serviceschedule']);

Route::get('/add-profile',[ProfileController::class, 'addProfile'])->name('profile.add');
Route::post('/add-profile',[ProfileController::class, 'saveProfile'])->name('save.profile');
Route::get('/profile-my',[ProfileController::class, 'myProfile'])->name('profile.my');
Route::get('/edit-profile',[ProfileController::class, 'editProfile'])->name('profile.edit');
Route::post('/update-profile',[ProfileController::class, 'updateProfile'])->name('update.profile');
Route::get('/myprofile/{id}',[ProfileController::class, 'display']);

//Route::get('/bookingAppointment-detail',[BookingAppointmentController::class, 'detailBookingAppointment'])->name('bookingAppointment.detail');
Route::get('/bookingAppointment',[BookingAppointmentController::class, 'bookingAppointment'])->name('bookingAppointment');
Route::post('/bookingAppointment_detail',[BookingAppointmentController::class, 'detailBookingAppointment'])->name('bookingAppointment_detail');
Route::get('/bookingAppointmentConfirmed/{id}',[BookingAppointmentController::class, 'bookingAppointmentConfirmed'])->name('bookingAppointmentConfirmed');


//Route::get('/edit-appointment',[BookingAppointmentController::class, 'editBookingAppointment'])->name('bookingAppointment.edit');
//Route::post('/update-appointment',[BookingAppointmentController::class, 'updateBookingAppointment'])->name('update.bookingAppointment');
Route::get('/bookingHistory',[BookingAppointmentController::class, 'bookingHistory'])->name('bookingHistory');
Route::get('/delete/{id}',[BookingAppointmentController::class, 'delete']);
Route::get('qrcode/{id}', [BookingAppointmentController::class, 'generate'])->name('generate');

