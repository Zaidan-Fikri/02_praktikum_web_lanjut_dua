<?php

// use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

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

// Nomor 2
// route::get('/', [PageController::class, 'index']);
// route::get('/about', [PageController::class, 'about']);
// route::get('/articles/{id}', [PageController::class, 'articles']);

// Nomor 3
route::get('/', [HomeController::class, 'index']);
route::get('/about', [AboutController::class, 'about']);
route::get('/article/{id}', [ArticleController::class, 'article']);