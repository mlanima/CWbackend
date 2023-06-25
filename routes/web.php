<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/logreg', 'MainController@logreg')->name('logreg');


Route::get('/book/{id}', 'BooksController@specialbook')->name('specialbook');




Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'BooksController@index' );

Route::get('/create', 'BooksController@create' );

Route::get('/update', 'BooksController@update' );

Route::get('/delete', 'BooksController@delete' );

Route::get('/restore', 'BooksController@restore' );

Route::get('/main', 'MainController@index' )->name('main');

Route::get('/fillgenres', 'GenresController@fillgenres' );

Route::get('/fillbooks', 'BooksController@fillbooks' );

Route::get('/catalog', 'CatalogController@catalog' )->name('catalog');

Route::get('/catalog/{value}', 'CatalogController@catalog_genre' )->name('catalog_genre');

Route::post('/addToCart/{bookId}', 'CartItemController@addToCart')->name('addToCart');

Route::post('/clear-cart',  'CartItemController@clearCart')->name('clearCart');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
