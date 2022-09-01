<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\PersonnelsController;

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
    return view('blank');
});

Route::resource('clients', ClientsController::class);


Route::resource('personnels', PersonnelsController::class);


Route::resource('postes', PostesController::class);


Route::get('display-post', [PostsController::class, 'index'])->name('posts.index');

Route::get('create-post', [PostsController::class, 'create'])->name('posts.create');

Route::post('save-post', [PostsController::class, 'save'])->name('posts.save');



Route::get('/dash', function () {
    return view('dashboard');
});

Route::get('/chatpanel', function () {
    return view('chatpanel');
});

Route::get('/insertpersonnel', function () {
    return view('personnels/create');
});
Route::get('/listpersonnel', function () {
    return view('personnels/list');
});
Route::get('/insertpostes', function () {
    return view('posts/create');
});
Route::get('/listpostes', function () {
    return view('posts/list');
});
Route::get('/insertclient', function () {
    return view('clients/create');
});
Route::get('/listclients', function () {
    return view('clients/list');
});
Route::get('/demandeconge', function () {
    return view('conges/demandeconge');
});
Route::get('/listeconge', function () {
    return view('conges/listeconge');
});
Route::get('/validerconge', function () {
    return view('conges/validerconge');
});





