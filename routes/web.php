<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(HomeController::class)->group(function(){
    Route::get('/',  'index');
    Route::post('storeAds',  'storeAds')->name('storeAds');
    Route::post('resumeAds',  'resumeAds')->name('resumeAds');
    Route::post('deleteAds',  'deleteAds')->name('deleteAds');
    Route::get('StoreAdsView',  'StoreAdsView')->name('StoreAdsView');
    Route::get('StopAds/{id}',  'StopAds');
});
