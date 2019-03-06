<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        /*$docs = Documento::get();
        return view('clientes.clienteIndex', compact('docs'));*/
        return 'clientes';
    }
}
