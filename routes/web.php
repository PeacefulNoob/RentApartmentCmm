<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactFormsMail;
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
Auth::routes();

Route::resource('properties','PropertyController');
Route::resource('covids','CovidController');

Route::get('/', 'SiteController@index')->name('home');
Route::get('/transfers', 'SiteController@transfers')->name('transfers');
Route::get('/excoursions', 'SiteController@excoursions')->name('excoursions');
Route::get('/rent-a-car', 'SiteController@rentCar')->name('rentCar');
Route::get('/rent-a-yacht', 'SiteController@rentYacht')->name('rentYacht');
Route::get('/about', 'SiteController@about')->name('about');
Route::get('/news', 'SiteController@news')->name('news');
Route::get('/single_news/{id}', 'SiteController@single_news')->name('single_news');


Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('admin/home');
    Route::resource('faqs','FaqController');
    Route::resource('blogs','BlogController');
    Route::get('/favourite/{id}', 'PropertyController@favourite')->name('favourite');
    Route::get('/notFavourite/{id}', 'PropertyController@notFavourite')->name('notFavourite');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UsersController',['except' => ['show','create','store']]);

});
Route::get('/email',function(){
    return new ContactFormsMail();
});

Route::post('Rent-a-Car', [
    'uses' => 'EmailController@exc',
    'as' => 'contact.store.main'
]);
Route::post('/email-yacht', [
    'uses' => 'EmailController@exy',
    'as' => 'contact.store.yacht'
]);

Route::get("/rentProperty" , 'PropertyController@showAllPropertyFilter')->name('property.filter');
Route::get('/filterProperties', 'PropertyController@showPropertyByFilter')->name('filter.properties');
