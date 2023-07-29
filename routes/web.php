<?php

use App\Http\Controllers\Admin\{PublisherController};
use App\Http\Controllers\EditalController;
use App\Http\Controllers\UnidadeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/get_unidades',[UnidadeController::class,'index'])->name('unidade.index');
Route::get('/ver_editais',[EditalController::class,'index'])->name('edital.index');

Route::get('/publisher',[PublisherController::class,'index'])->name('publisher.index');

Route::get('/contato', function () {
    return view('site/contact');
});   // o ideal é que tenha tudo no controle (http/controllers) essas rotas. A não ser a / que é bem simples

Route::get('/', function () {
    return view('welcome');
});
