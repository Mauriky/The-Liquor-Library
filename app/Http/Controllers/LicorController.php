<?php

namespace App\Http\Controllers;

use App\Licor;
use Illuminate\Http\Request;

class LicorController extends Controller
{
    public function index(){
        /*$docs = Documento::get();
        return view('licores.licorIndex', compact('docs'));*/
        return 'Licores';
    }
}
