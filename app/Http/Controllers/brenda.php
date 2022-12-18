<?php

namespace App\Http\Controllers;
use App\Models\notas;
use Illuminate\Http\Request;

class brenda extends Controller
{
    public function show(){
        $notas = notas::all();

     $bre = "hola mundo";

return \view("plan")->with("bre" , $bre)->with("notass" , $notas);



    }
}
