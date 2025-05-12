<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/my-plece', [MyPlaceController::class, 'index']);