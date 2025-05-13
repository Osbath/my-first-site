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
