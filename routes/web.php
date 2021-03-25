<?php

use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile-update', 'ProfileController@update')->name('profile.update');
Route::get('/premiumplans', 'PremiumPlanController@index')->name('premiumplans');
Route::get('/guestreport', 'GuestReportController@index')->name('guestreport');
// Route::get('/payment', 'PaymentController@index')->name('payment');
// Route::get('/payment/success', 'PaymentController@success')->name('payment.success');
// Route::get('/payment/cancel', 'PaymentController@cancel')->name('payment.cancel');
Route::get('/privacypolicy', 'PrivacyPolicyController@index')->name('privacypolicy');
Route::get('/acceptprivacypolicy', 'PrivacyPolicyController@accept')->name('acceptprivacypolicy');


Route::get('qr-code-g', function () {
  
    \QrCode::size(500)
            ->format('png')
            ->generate('www.ichbindada-app.de', public_path('images/qrcode.png'));
    
  return view('qrCode');
    
});


Route::get('payment', 'PaymentController@index')->name('payment');
Route::post('charge', 'PaymentController@charge');
Route::get('paymentsuccess', 'PaymentController@payment_success');
Route::get('paymenterror', 'PaymentController@payment_error');
