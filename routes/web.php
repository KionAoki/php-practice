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
    return view('welcome');
});

Route::get('/read', function(){
    $flights = App\Flight::all();

    foreach ($flights as $flight) {
        echo $flight->userName;
    }
});

/*public function index()
{
    $users = DB::select('select * from userData', [1]);
    return view('user.index', ['users' => $users]);
}*/

