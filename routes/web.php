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

Route::get('/names/create/{family}/{name}', 'App\Http\Controllers\TesztController@namesCreate');
Route::get('/families/create/{name}', 'App\Http\Controllers\TesztController@familyCreate');
Route::post('/names/delete', 'App\Http\Controllers\TesztController@deleteName');
Route::get('/names/manage/surname', 'App\Http\Controllers\TesztController@manageSurname');
Route::post('/names/manage/surname/delete', 'App\Http\Controllers\TesztController@deleteSurname');
Route::post('/names/manage/surname/new', 'App\Http\Controllers\TesztController@newSurname');
Route::post('/names/manage/name/new', 'App\Http\Controllers\TesztController@newName');
