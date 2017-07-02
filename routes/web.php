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

use Illuminate\Http\Request;
use App\Link;

/* default root*/
Route::get('/', function () {
    return view('welcome');
});

/* task-list */


Route::get('/link',function(){
    $links = Link::all();
    return view('linklist.link', ['links' => $links]);
});

Route::get('/submit', function () {
    return view('linklist.submit');
});

Route::post('/submit','LinkController@submit');

/* EndoContact2 rooting*/
Route::get('/top', function () {
    return view('contact.top');
});

Route::get('/post', function () {
    return view('contact.post');
});


// Route::get('/post','PostController@hello');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
