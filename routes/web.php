<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;

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
Auth::routes(['register' => false,'request' => false, 'reset' => false]);

Route::resource('/HT01', 'HT50\InforCustomerSurveyController');

Route::resource('/sms', 'HT50\SMSController');

Route::resource('/HT02', 'HT10\CustomerFeedbackController');

Route::resource('/HT11', 'HT11\InsuranceController');


Route::resource('/insurance', 'HT11\InsuranceManagerController');
Route::get('/insurance-end-point', 'HT11\InsuranceController@noInsurance');

Route::resource('/cheditor', 'CheditorController');
Route::post('cheditor/upload', 'HT11\InsuranceManagerController@upload')->name('ckeditor.upload');

Route::get('my-laravel-endpoint','HT11\InsuranceManagerController@upload');
