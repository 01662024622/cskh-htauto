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

Route::resource('/HT01', 'HT50\InforCustomerSurveyController');

Route::resource('/sms', 'HT50\SMSController');

Route::resource('/HT02', 'HT10\CustomerFeedbackController');
