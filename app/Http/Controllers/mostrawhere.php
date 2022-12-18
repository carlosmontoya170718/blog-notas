<?php

namespace App\Http\Controllers;
use App\Models\notas;
use Illuminate\Http\Request;

class mostrawhere extends Controller
{
 public function  show(){

    

    $notas = notas::all();
    

        $hola = "hola mundo";

return  \view("plan")->with("hola" ,$hola )->with("notass" ,$notas );



 }
}
