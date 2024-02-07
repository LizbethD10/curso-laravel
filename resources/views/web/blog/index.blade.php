@extends('web.layout')

@section('content')
    <h1>Listado</h1>
    <x-web.blog.post.index :posts="$posts">     
        <h1>Listado Principal de Post</h1>
      
        @slot('header')
        <h1>Listado principal de post --slot nombre</h1>
        @endslot

        @slot('footer')
            <footer>
                pie de Pagina
            </footer>
        @endslot
        
        @slot('extra')
            Extra
        @endslot

    </x-web.blog.post.index>
@endsection