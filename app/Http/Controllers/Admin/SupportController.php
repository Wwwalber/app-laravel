<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(){

        //carregar dados
        $support = new Support();
        // traz para um array
        $supports = $support->all(); // ($columns = ['*'])
        dd($supports); // se quiser debugar: com 'dd()', faz um 'var_dump' e chama 'die()'
        return view('admin/supports/index');
    }
}
