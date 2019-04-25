<?php
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
    return view('welcome')->with(['title' => 'Assessment | Contact Us']);
});

Route::post('/create/message', 'MessageController@createMessage');
Route::get('/success', function () {
    return view('success')->with(['title' => 'Assessment | Success']);
});
Route::get('/fishy', function () {
    return view('fishy')->with(['title' => 'Assessment | Fishy Fun']);
});
