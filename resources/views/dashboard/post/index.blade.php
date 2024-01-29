@extends('dashboard.layout')

@section('content')
   

   
    <br>
    <br>
    <a   class="btn btn-success my-3" href="{{ route("post.create") }}" style="font-size: 18px; font-weight: bold;">Crear Nuevo Usuario</a>
    <br>
    <br>
  
        <table class="table mb-3">
            <thead>
                <tr>
                    <th>Titulo</th> 
                    <th>Categoria</th>
                    <th>Posted</th>
                    <th>Acciones</th>
                </tr>
            </thead>

                <tbody>
                    @foreach ($posts as $p)
                    <tr>
                        <td>
                            {{ $p->title }}&emsp;&emsp;&emsp;
                        </td>

                        <td>{{ $p ->category ->title}}&emsp;&emsp;</td>

                        <td>
                            {{ $p->posted }}&emsp;&emsp;&emsp;
                        </td>
                        
                        <td>
                            <a class="btn mt-2 btn-primary" href="{{ route("post.edit",$p) }}" >Editar&emsp;</a>
                            
                            <a class="btn mt-2 btn-warning" href="{{ route("post.show",$p)}}">Ver</a>
                           <br>
                        
                            <form class=" mt-2 btn btn-danger" action="{{ route("post.destroy",$p) }}" method="post">
                            @method("DELETE")
                                @csrf
                                <button type="submit">Eliminar</button>                            
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
        </table>
    
        {{$posts-> links()}}
@endsection