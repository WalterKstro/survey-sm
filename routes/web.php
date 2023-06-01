<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CountryController;
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
Route::group(['prefix' => 'admin'], function(){
    Route::view('/','dashboard.country.dashboard')->name('admin');
    Route::resource('country',CountryController::class);
});


/*Routes for public*/
