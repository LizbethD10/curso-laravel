@extends('dashboard.layout')

@section('content')
   

    
  
    <br>
    <br>
    <a  class=" my-2 btn btn-success" href="{{ route("post.create") }}" style="font-size: 18px; font-weight: bold;">Crear Nuevo Usuario</a>
    <br>
    <br>
        <table  class="table mb-3">
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
                           <a class="btn btn-primary mt-2" href="{{ route("category.edit",$c) }}" >Editar&emsp;</a>

                            <a class="btn btn-warning mt-2" href="{{ route("category.show",$c)}}">Ver</a>

                            <form action="{{ route("category.destroy",$c) }}" method="post">
                            @method("DELETE")
                                @csrf
                                <button  class="btn btn-danger mt-2" type="submit">Eliminar</button>                            
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>               
        </table>
        {{$categories-> links()}}
@endsection