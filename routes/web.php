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
    return redirect('login');
});

// Routes definded for frontend part of the blog site.

Route::get('abblog', 'front\Frontcontroller@index')->name('home');
Route::get('abblog/about', 'front\Frontcontroller@about')->name('about');
Route::get('abblog/contact', 'front\Frontcontroller@contact')->name('contact');
Route::get('abblog/frontpost', 'front\Frontcontroller@frontpost')->name('frontpost');




Route::get('/login','Logincontroller@login')->name('login');

Route::post('submit_login','Logincontroller@auth');

Route::get('/logout','Logincontroller@logout')->name('logout');


//Routes here are backend routes which will be used by admins and passed through middleware for authentication of user before entering into controller
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


//Now followings are the routes for contacts

    Route::get('/admin/cont', 'admin\cont@list')->name('listcont');

    Route::get('/admin/addcont', 'admin\cont@add')->name('addcont');
    Route::post('/admin/submitcont', 'admin\cont@submit')->name('submitcont');

    Route::get('/admin/editcont/{id}', 'admin\cont@edit')->name('editcont');
    Route::post('/updatecont/{id}', 'admin\cont@update');

    Route::get('/admin/deletecont/{id}' , 'admin\cont@delete')->name('deletecont');

});
