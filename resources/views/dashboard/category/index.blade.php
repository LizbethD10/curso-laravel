@extends('dashboard.layout')

@section('content')
   

    <body style="background-color:#599995c2;">
    </body>
    <br>
    <br>
    <a href="{{ route("category.create") }}">Crear Nuevo Usuario</a>
    <br>
    <br>
        <table style="background-color: rgba(234, 240, 61, 0.436)">
            <thead>
                <tr>
                    <th>Titulo</th> 
                    <th>Acciones</th>
                </tr>
            </thead>

                <tbody>
                    @foreach ($categories as $c)
                    <tr>
                        <td>
                            {{ $c->title }}&emsp;&emsp;&emsp;
                        </td>                    
                        <td>
                           <a href="{{ route("category.edit",$c) }}" >Editar&emsp;</a>

                            <a href="{{ route("category.show",$c)}}">Ver</a>

                            <form action="{{ route("category.destroy",$c) }}" method="post">
                            @method("DELETE")
                                @csrf
                                <button type="submit">Eliminar</button>                            
                            </form>
                            &emsp;&emsp;&emsp;
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
        </table>
        {{$categories-> links()}}
@endsection