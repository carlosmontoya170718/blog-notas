<h1> Usuarios </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif

    @if($notass->count())
       <table style="border: solid 1px #000;">
          <thead>
          <tr>
             <th style="width: 200px; border-bottom: solid 1px #000;"> titulo </th>
             <th style="width: 200px; border-bottom: solid 1px #000;"> texto </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> fecha </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> id </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($notass as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->titulo }} </td>
                <td style="text-align: center;"> {{ $item->texto }} </td>
                <td style="text-align: center;"> {{ $item->fecha }} </td>
                <td style="text-align: center;"> {{ $item->id }} </td>
                <td style="text-align: center;"> Ver </td>
                <td style="text-align: center;"> Editar </td>
                <td style="text-align: center;">

                <form action="{{ url('users2/'.$item->id ) }}" method="post">
                 @csrf
                 {{ method_field('DELETE') }}
                  <input type="submit" onclick="return confirm('quieres borrar' )" value="Borrar">

                </form>
                
                Eliminar </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado usuarios </p>
    @endif