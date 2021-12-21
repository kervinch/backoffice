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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Organization
Route::get('/organization', 'App\Http\Controllers\Admin\OrganizationController@index');
Route::get('/organization/dt', 'App\Http\Controllers\Admin\OrganizationController@organization_dt');
Route::get('/organization/create', 'App\Http\Controllers\Admin\OrganizationController@create_view');
Route::post('/organization/create', 'App\Http\Controllers\Admin\OrganizationController@submit');
Route::get('/organization/edit/{id}', 'App\Http\Controllers\Admin\OrganizationController@edit_view');
Route::post('/organization/edit', 'App\Http\Controllers\Admin\OrganizationController@edit');
Route::delete('/organization/delete/{id}', 'App\Http\Controllers\Admin\OrganizationController@delete');

// People
Route::get('/people', 'App\Http\Controllers\Admin\PeopleController@index');
Route::get('/people/dt', 'App\Http\Controllers\Admin\PeopleController@people_dt');
Route::get('/people/create', 'App\Http\Controllers\Admin\PeopleController@create_view');
Route::post('/people/create', 'App\Http\Controllers\Admin\PeopleController@submit');
Route::get('/people/edit/{id}', 'App\Http\Controllers\Admin\PeopleController@edit_view');
Route::post('/people/edit', 'App\Http\Controllers\Admin\PeopleController@edit');
Route::delete('/people/delete/{id}', 'App\Http\Controllers\Admin\PeopleController@delete');

require __DIR__.'/auth.php';
