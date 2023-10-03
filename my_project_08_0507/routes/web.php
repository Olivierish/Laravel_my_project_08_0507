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
//TEST PAGE
// Route::get('/gruss', function(){
//     return 'Jallo World!';
// });


Route::get('/wert/{wertVonUser}', function ($number) {
    $erg = '';
    for ($i=0; $i <= $number; $i++) { 
        $erg .= "<p>${i} X ${i} = $i * $i </p>";
    }
    return $erg;
});

Route::get('/zahlen/{wertVonUser}', function ($number = 1) {
    $erg = '';
    if (is_int($number)) {
        for ($i=0; $i <= $number; $i++) { 
            $erg .= "<p>${i} X ${i} = " . ($i * $i). " </p>";
        }
    }
    
    return $erg;
});

Route::get('/', function () {
    return view('startseite');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/portfolio','MyController@index');

Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::resource('post', 'PostController');
//Route::resource('post', 'PostController')->middleware('auth');

Route::resource('user', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function(){
    #dd(DB::table('posts')->get());
    #dd(DB::table('posts')->where('id','>',10)->get());
    #dd(DB::table('posts')->whereBetween('id',[5,10])->get());
    dd(DB::table('posts')->count());
});