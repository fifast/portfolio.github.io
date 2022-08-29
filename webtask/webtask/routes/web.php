<?php
use App\Http\Controllers\BasicElementController;
use App\Http\Controllers\LoginController;
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
    return view('login');
})->middleware('alrlogin');

Route::get('/welcome', function () {
    return view('welcome');
})->middleware('authlogin');

Route::get('/logout', function () {
    Session::forget('userName');
    return redirect('/');
});

Route::get('/basic_ele', function () {
    return view('basic_element');
});
Route::post('element',[BasicElementController::class,'insertData']);
Route::get('getdata',[BasicElementController::class,'getData']);

Route::get('datadelete/{id}',[BasicElementController::class,'dataDel']);
Route::get('dataedit/{id}',[BasicElementController::class,'dataEdit']);

Route::post('/edit',[BasicElementController::class,'updateData']);
Route::post('/userlogin',[LoginController::class,'Login']);