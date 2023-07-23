<?php

use App\Http\Controllers\Admin\{SupportController}; //{}
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

//          url     classe controle lógica    pág. destino     referencia p/ rota
Route::get('/supports',[SupportController::class,'index'])->name('supports.index');
                                                        // permite mudar a chamada da rota na url, mas encaminha para o mesmo destino

Route::get('/contatossite', [SiteController::class, 'contact']);

Route::get('/contatoshome', [HomeController::class, 'contact']);

Route::get('/teste', [TestController::class, 'testar']);
Route::get('/', function () {
    return view('welcome');
});
