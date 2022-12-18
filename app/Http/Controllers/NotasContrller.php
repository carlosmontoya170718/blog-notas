<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notas;
use Illuminate\Support\Facades\Input;
class NotasContrller extends Controller
{
    
  public function index() {
  
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

    for($i=0;$i<6;$i++){
       $escogidos[0][$i]=$titulos[$i];
       $escogidos[1][$i]=$textos[$i];
       $escogidos[2][$i]=$fechas[$i];
       $escogidos[3][$i]=$ide[$i];

    }
    return \View::make('plan')->with('notass', $notas)->with('notas1', $escogidos)->with('usi', $usi);
    ///return \View::make('plan',array('notass'=>$notas));
 }
  
  ///public function index(){

      ////$notas =notas::all();
      ////return view("plan", array("notass"=>$notas) );


    /////}

    public function edit($id){


      $notas = notas::findOrfail($id);

      return view('edit',compact('notas'));

  }

    public function update( Request $request,$id){
      
      $datosrecibidos = request()->except(['_token','_method']);
      notas::where('id','=',$id)->update($datosrecibidos);
      $notas = notas::findOrfail($id);

      return view('edit',compact('notas'));

     //// $actualizar  = array("titulo"=>$datos["titulo"],
     ////                       "texto"=>$datos["texto"] );
                               
       ///     $notas = notas::where("id" $id->update($actualizar));
          
    }

    public function create() {
      $userr = new notas();
      return \View::make('plan')->with('user', $userr);
   }

    public function store(Request $request) {
      //$user = new notas();
      //$user->titulo = Input::get('titulo');
      //$user->texto = Input::get('texto');
      ////////////////$user->password = Hash::make(Input::get('password'));
      //////////////////$user->level = Input::get('level');
      //$user->active = true;
      //$user->save();
     // return Redirect::to('plan')->with('mensaje', 'El usuario ha sido creado correctamente.');
     //return \View::make('plan',)->with('user', $user);
     ///$datosrecibidos = request()->all();
     $datosrecibidos = request()->except('_token');
     notas::insert($datosrecibidos);
     ///return response()->json($datosrecibidos);
     return redirect('/');

   }

   

   public function destroy($id){

     notas::destroy($id);
    return redirect('/');

   }
  
   
}
