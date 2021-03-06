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


/* task-list */
Route::get('/',function(){
    $links = Link::all();
    return view('linklist.link', ['links' => $links]);
});

Route::get('/submit', function () {
    return view('linklist.submit');
});

#LinkListの投稿フォームへ遷移する。
Route::post('/submit','LinkController@submit');
#LinklistのEditページへ遷移する。
Route::get('/link/{id}/edit','LinkController@edit');
#Linklistの修正した内容を更新する。
Route::patch('/link/{id}','LinkController@update');
#Linklistを消去する。
Route::delete('/link/{id}','LinkController@destroy');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
