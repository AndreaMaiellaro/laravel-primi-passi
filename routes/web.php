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
    $data = [
        'hello' => 'Hello World'
    ];

    $array = [
        'ingrediente_uno' => 'farina',
        'ingrediente_due' => 'pomodoro',
        'ingrediente_tre' => 'mozzarella'
    ];

    return view('home', $data, $array);
});
