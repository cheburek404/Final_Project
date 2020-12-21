<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('home', function (){
    return view('home');
})->name('home');

Route::get('products', function (){
    return view('products');
})->name('prod');

Route::get('products1', function (){
    return view('products1');
})->name('prod1');

Route::get('products2', function (){
    return view('products2');
})->name('prod2');

Route::get('about', function (){
    return view('about');
})->name('about');

Route::get('icons', function (){
    return view('icons');
})->name('icons');

Route::get('codes', function (){
    return view('codes');
})->name('codes');

Route::get('mail', function (){
    return view('mail');
})->name('mail');

Route::get('/register', 'AuthController@getSignup')->middleware('guest')->name('RegAuth.reg');
Route::post('/register', 'AuthController@postSignup')->middleware('guest');

Route::get('/auth', 'AuthController@getSignin')->middleware('guest')->name('RegAuth.auth');
Route::post('/auth', 'AuthController@postSignin')->middleware('guest');

Route::get('/signout', 'AuthController@getSingout')->name('RegAuth.signout');

//Route::get('/profile/edit', 'ProfController@getEdit')->name('profile.edit');
//Route::post('/profile/edit', 'ProfController@postEdit')->name('profile.edit');
