<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CountryController;
use \App\Http\Controllers\SurveyController;
use \App\Http\Controllers\AuthenticationController;
use \App\Http\Controllers\QuestionController;
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

/*Routes for dashboard*/
Route::group(['middleware'=>'auth','prefix' => '/admin'], function(){
    Route::view('/','dashboard.dashboard')->name('admin');
    /*CRUD Country*/
    Route::resource('country',CountryController::class);
    /*CRUD Questions*/
    Route::resource('questions',QuestionController::class);
    Route::view('account','dashboard.account.create')->name('account');
    Route::post('logout', [AuthenticationController::class,'destroy'])->name('authentication.destroy');
});


/*Routes for public*/
Route::group(['prefix'=>'/'],function() {
    Route::get('/',[SurveyController::class,'showOrigin'])->name('survey.showOrigin');
    Route::view('not-found','public.not-found')->name('not-found');
    Route::post('survey',[SurveyController::class,'create'])->name('survey.create');
    Route::get('survey',[SurveyController::class,'create'])->name('survey.create');
    Route::post('process',[SurveyController::class,'store'])->name('survey.store');
    Route::view('thanks','public.thanks')->name('survey.thanks');
    Route::view('login','public.login')->name('login');
    Route::post('login', [AuthenticationController::class,'store'])->name('authentication.store');
});
