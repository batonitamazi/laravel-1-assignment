<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    
    $stringResponse = 'Tamazi Mirianashvili and I am 21 years old my hobbies are hiking, cycling and photography';
    
    return $stringResponse;
});
Route::get('/name', function () {
    
    $stringResponse = 'Tamazi';
    
    return $stringResponse;
});
Route::get('/surname', function () {
    
    $stringResponse = 'Mirianashvili';
    
    return $stringResponse;
});
Route::get('/age', function () {
    
    $stringResponse = '21 years old ';
    
    return $stringResponse;
});
Route::get('/hobbies', function () {
    
    $stringResponse = 'my hobbies are hiking, cycling and photography';
    
    return $stringResponse;
});
Route::get('/other', function () {
    $stringResponse = 'Other information not provided 😁';
    return $stringResponse;
});

Route::post('/save', function () {
    return response()->json(['message' => 'წარმატებით დაემატა']);
});
Route::put('/update', function () {
    return response()->json(['message' => 'წარმატებით განახლდა']);
});

Route::delete('/delete', function () {
    return response()->json(['message' => 'წარმატებით წაიშალა']);
});
