<?php

namespace App\Http\Controllers;
use App\Models\notas;
use Illuminate\Http\Request;

class carriles extends Controller
{


    public function show($usi){

    $notas = notas::all();
    $i=0;
    foreach ($notas as $key =>  $value){
       
        $titulos[$i] = $value["titulo"];
        $textos[$i]  = $value["texto"];
        $fechas[$i]  = $value["fecha"];
        $ide[$i]     = $value["ide"];
         $i++;
           
         }

    for($i=0;$i<sizeof($titulos);$i++){
       $escogidos[0][$i]=$titulos[$i];
       $escogidos[1][$i]=$textos[$i];
       $escogidos[2][$i]=$fechas[$i];
       $escogidos[3][$i]=$ide[$i];
       

    }
  ///  $escogidos[4][$i]=$i;

   /// print_r($escogidos);

    

   //// if($usi>0){

    ////    return \view('plan')->with('notass', $notas)->with('notas1', $escogidos);


   //// }else{
    
   /// }
 $usi = $usi +6;
    return \view('plan')->with('notass', $notas)->with('notas1', $escogidos)->with('usi', $usi);



    }

    public function index(){
        $notas = notas::all();
        $usi=0;
        $i=0;
        foreach ($notas as $key =>  $value){
           
            $titulos[$i] = $value["titulo"];
            $textos[$i]  = $value["texto"];
            $fechas[$i]  = $value["fecha"];
            $ide[$i]     = $value["ide"];
             $i++;
               
             }
    
        for($i=0;$i<sizeof($titulos);$i++){
           $escogidos[0][$i]=$titulos[$i];
           $escogidos[1][$i]=$textos[$i];
           $escogidos[2][$i]=$fechas[$i];
           $escogidos[3][$i]=$ide[$i];
           
    
        }
        //RETORNAR EL REGISTRO SIGUIENTE Y ANTERIOR DE UN REGISTRO ACTUAL//
       //////// $registro   =   notas::where("id",$id)
       //////                 ->first();
       /////////// $next       =   notas::where('id', '>', $registro->id)
       /////////                 ->orderBy('id', 'asc')
       /////////                 ->first();
       //////// $prev       =   notas::where('id', '<', $registro->id)
       ////////                 ->orderBy('id', 'desc')
        /////////                ->first();
        $registro1 ="yo soy registro ";
        $next1 ="yo soy next";
        $prev1="hola que tal ";
        ///return \view("plan",compact('registro','next','prev'));
        ///->with('notass', $notas)
        return \view("plan")->with('registro1', $registro1)->with('next1', $next1)->with('prev1', $prev1)->with('notass', $notas)->with('notas1', $escogidos)->with('usi', $usi);;
        
    }
}
