<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\DB; ya no se utilizara debido a que tenemos el modelo
use App\Documento;//nos traemos el modelo
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function index(){
        //consulta con db
        //$docs = DB::table('documentos')->get();
        //('documentos')->where('id', '!=,<,>,etc', '0')->get();
       // dd($docs); //die drop arrojar lo que tiene la variable

       //Uso de modelo
        $docs = Documento::where('id', '!=', 1)->get();


        return view('documentos.documentoIndex', compact('docs'));
    }
}
