<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/contatossite', [SiteController::class, 'contact']);

Route::get('/contatoshome', [HomeController::class, 'contact']);

Route::get('/teste', [TestController::class, 'testar']);
Route::get('/', function () {
    return view('welcome');
});
