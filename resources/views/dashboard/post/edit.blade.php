@extends('dashboard.layout')


@section('content')
        <h1>Actualizar Prueba:{{ $post->title }}</h1>

        @include('dashboard.fragment._errors_form')
        
        <form action="{{route('post.update', $post->id)}}" method="post" enctype="multipart/form-data">         
            @method("PATCH")
           
            @include('dashboard.post._form',["task"=> "edit"])

        </form>
@endsection
