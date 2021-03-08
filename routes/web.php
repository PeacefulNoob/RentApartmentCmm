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
Route::resource('faqs','FaqController');

Route::get('/', function () {
    return redirect(app()->getLocale());
});

 Route::get('/setLocaleRout/{lang}', function ($lang) {
    App::setlocale($lang);
    return redirect(app()->getLocale());
            })->name('setLocaleRout');

            
Route::prefix('{lang?}')->middleware('setlocale')->group(function() {


});

Route::get('calendar' , 'CalendarController@index');

Route::get('/', 'SiteController@index')->name('home');
Route::get('/transfers', 'SiteController@transfers')->name('transfers');
Route::get('/excoursions', 'SiteController@excoursions')->name('excoursions');
Route::get('/rent-a-car', 'SiteController@rentCar')->name('rentCar');
Route::get('/rent-a-yacht', 'SiteController@rentYacht')->name('rentYacht');
Route::get('/about', 'SiteController@about')->name('about');
Route::get('/terms', 'SiteController@terms')->name('terms');
Route::get('/news', 'SiteController@news')->name('news');
Route::get('/single_news/{id}', 'SiteController@single_news')->name('single_news');


Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('admin/home');
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
Route::post('Rent-Yacht', [
    'uses' => 'EmailController@exy',
    'as' => 'contact.store.yacht'

]);
Route::post('Send-Inquiry', [
    'uses' => 'EmailController@propertyInquiry',
    'as' => 'contact.store.property'
]);
Route::get("/rentProperty" , 'PropertyController@showAllPropertyFilter')->name('property.filter');
Route::get('/filterProperties', 'PropertyController@showPropertyByFilter')->name('filter.properties');
Route::post('upload_image','PropertyController@uploadImage')->name('upload');
