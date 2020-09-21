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

Route::get('/login','Logincontroller@login')->name('login');

Route::post('submit_login','Logincontroller@auth');

Route::get('/logout','Logincontroller@logout')->name('logout');


//Routes here are passed through middleware for authentication of user before entering into controller
Route::group(['middleware'=>['admin_auth']], function () {

    Route::get('/admin/post', 'admin\Post@list')->name('list');

    Route::get('/admin/add', 'admin\Post@add')->name('add');
    Route::post('/admin/submitPost', 'admin\Post@submit')->name('submitPost');

    Route::get('/admin/edit/{id}', 'admin\Post@edit')->name('edit');
    Route::post('/updatePost/{id}', 'admin\Post@update');

    Route::get('/admin/delete/{id}' , 'admin\Post@delete')->name('delete');

//Now followings are the routes for pages

    Route::get('/admin/page', 'admin\Page@list')->name('listPage');

    Route::get('/admin/addPage', 'admin\Page@add')->name('addPage');
    Route::post('/admin/submitPage', 'admin\Page@submit')->name('submitPage');

    Route::get('/admin/editPage/{id}', 'admin\Page@edit')->name('editPage');
    Route::post('/updatePage/{id}', 'admin\Page@update');

    Route::get('/admin/deletePage/{id}' , 'admin\Page@delete')->name('deletePage');



});
