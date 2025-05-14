<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\MyPlaceController1;
use App\Http\Controllers\MyPlaceController2;
use App\Http\Controllers\MyPlaceController3;
use App\Http\Controllers\MyPlaceController4;
use App\Http\Controllers\MyPlaceController5;
use App\Http\Controllers\MyPlaceController6;
use App\Http\Controllers\MyPlaceController7;
use App\Http\Controllers\MyPlaceController8;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'test text 1';
});

Route::get('/my-page', function () {
    return 'bem pem bums';
});

Route::get('/pop', function () {
    return 'ogo';
});

Route::get('/page4', function () {
    return 'page4 text';
});

Route::get('/page5', function () {
    return 'text page 5';
});

Route::get('/page6', function () {
    return 'text6 pop pop lop';
});

Route::get('/page7', function () {
    return 'lord';
});

Route::get('/page8', function () {
    return 'text stop';
});

Route::get('/my-place', [MyPlaceController::class, 'index']);
Route::get('/my-place1', [MyPlaceController1::class, 'index']);
Route::get('/my-place2', [MyPlaceController2::class, 'index']);
Route::get('/my-place3', [MyPlaceController3::class, 'index']);
Route::get('/my-place4', [MyPlaceController4::class, 'index']);
Route::get('/my-place5', [MyPlaceController5::class, 'index']);
Route::get('/my-place6', [MyPlaceController6::class, 'index']);
Route::get('/my-place7', [MyPlaceController7::class, 'index']);
Route::get('/my-place8', [MyPlaceController8::class, 'index']);