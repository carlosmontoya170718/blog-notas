           @php
             
               $i=0;

           @endphp

   
         
           @foreach ($notass as $key => $value)
       
            @php


             $titulos[$i]= $value["titulo"];
             $textos[$i]= $value["texto"];
             $fechas[$i]= $value["fecha"];

            $i++;
                
            @endphp
           @endforeach
         
            

          
           @php
            $i=0;
            $j=0;
           @endphp
        @for( $i=$usi ;  $j < 6; $i++)
        @php
             $j++;
           /// echo $usi;


            if($usi> sizeof($titulos)-6){
                echo "usi es mayor";
                $i=0;
                $usi=0;

            }

        @endphp
        <div class="col-4">
    
           <div class="noteCard my-2 mx-2 card" style="width: 18rem;">
              <div class="card-body">
                    <h5 class="card-title">
                             {{   $titulos[$i]  }}
                    </h5><h5 class="card-title">
                             {{   $fechas[$i]  }}
                    </h5>
                    <p class="card-text"> 
                    {{   $textos[$i]  }}
                    </p>
   
                  
                  <form action="{{ url('users2/'.$value['id'] ) }}" method="post">
                 @csrf
                 {{ method_field('DELETE') }}
                  <input type="submit" onclick="return confirm('quieres borrar' )" value="Erase" class="btn btn-danger" >
                   <a  href="{{ url('users2/'.$value['id'].'/edit' ) }}" class="btn btn-primary"> Edit Note </a>
              
                </form>
                  
                 </div>

          </div>
        
        </div>
   
        
        @endfor
        </div>
            </div>
            
            <div class="btn-group" role="group" aria-label="Basic example">
            <div class="btn btn-secondary">
            <a  href="{{ url('users3/').'/'.($usi-6) }}" >priview</a>
            @csrf
        </div>   
        <div class="btn btn-secondary">
        <a  href="{{ url('users3').'/'.$usi }}" >Next</a>
            @csrf
        </div> 
        </div> 
        
          @php
           ////////// print($notas1[0][0]);
           @endphp

           
      
