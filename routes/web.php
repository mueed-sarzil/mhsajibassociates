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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');

//Route::get('/login', 'HomeController@login')->name('login.index');
Route::get('/home', 'homeController@index')->name('home.index');
Route::get('/home/review', 'homeController@review')->name('home.review');
Route::post('/home/review', 'homeController@reviewstore');
//Route::post('/home', 'homeController@review');

Route::group(['middleware'=>['sess']], function(){
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/info', 'AdminController@info')->name('admin.info');
Route::get('/admin/profile', 'AdminController@index')->name('admin.index');
Route::get('/admin/profile/{id}/edit', 'AdminController@editprofile')->name('admin.edit_profile');
Route::post('/admin/profile/{id}/edit', 'AdminController@editedprofile');

Route::get('/admin/about', 'AdminController@about')->name('admin.about');
Route::post('/admin/about', 'AdminController@aboutstore');
Route::get('/admin/contact', 'AdminController@contact')->name('admin.contact');
Route::post('/admin/contact', 'AdminController@contactstore');
Route::get('/admin/service', 'AdminController@service')->name('admin.service');
Route::post('/admin/service', 'AdminController@servicestore');
Route::get('/admin/motto', 'AdminController@motto')->name('admin.motto');
Route::post('/admin/motto', 'AdminController@mottostore');

//Route::get('/admin/review', 'AdminController@review')->name('admin.review');

Route::get('/admin/service/{id}/edit', 'AdminController@editservice')->name('admin.edit_service');
Route::post('/admin/service/{id}/edit', 'AdminController@editedservice');

Route::get('/admin/{id}/delete', 'AdminController@deleteservice')->name('admin.delete_service');
Route::post('/admin/{id}/delete', 'AdminController@destroyservice');

Route::get('/admin/about/{id}/edit', 'AdminController@editabout')->name('admin.edit_about');
Route::post('/admin/about/{id}/edit', 'AdminController@editedabout');

Route::get('/admin/contact/{id}/edit', 'AdminController@editcontact')->name('admin.edit_contact');
Route::post('/admin/contact/{id}/edit', 'AdminController@editedcontact');

Route::get('/admin/motto/{id}/edit', 'AdminController@editmotto')->name('admin.edit_motto');
Route::post('/admin/motto/{id}/edit', 'AdminController@editedmotto');

Route::get('/admin/information', 'AdminController@information')->name('admin.information');
Route::post('/admin/information', 'AdminController@informationstore');

Route::get('/admin/information/{id}/edit', 'AdminController@editinformation')->name('admin.edit_information');
Route::post('/admin/information/{id}/edit', 'AdminController@editedinformation');


Route::get('/admin/employee', 'AdminController@employee')->name('admin.emp');
Route::post('/admin/employee', 'AdminController@upload');

Route::get('/admin/employee/{id}/edit', 'AdminController@editemp')->name('admin.edit_emp');
Route::post('/admin/employee/{id}/edit', 'AdminController@editedemp');

});