<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/teszt', 'App\Http\Controllers\TesztController@teszt');
$names = [
            'Traza', 'Beep', 'Zsó', 'Musla',
            'D3n', 'Nekokota', 'Nhilerion'
        ];
        $randomNameKey = array_rand($names, 1);
        $randomName = $names[$randomNameKey];
        
Route::get('/names', 'App\Http\Controllers\TesztController@names');

Route::get('/names/create/{name}', 'App\Http\Controllers\TesztController@namesCreate');

Route::get('/names/create/{family}/{name}', 'App\Http\Controllers\TesztController@namesCreate')->middleware('auth');
Route::get('/families/create/{name}', 'App\Http\Controllers\TesztController@familyCreate')->middleware('auth');
Route::post('/names/delete', 'App\Http\Controllers\TesztController@deleteName')->middleware('auth');
Route::get('/names/manage/surname', 'App\Http\Controllers\TesztController@manageSurname')->middleware('auth');
Route::post('/names/manage/surname/delete', 'App\Http\Controllers\TesztController@deleteSurname')->middleware('auth');
Route::post('/names/manage/surname/new', 'App\Http\Controllers\TesztController@newSurname')->middleware('auth');
Route::post('/names/manage/name/new', 'App\Http\Controllers\TesztController@newName')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', function(){
    return view('pages.profile');
})->middleware('auth');

Route::post('/profile/change-password', 'App\Http\Controllers\UserController@changePassword')->middleware('auth');
