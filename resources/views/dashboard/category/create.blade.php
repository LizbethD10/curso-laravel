@extends('dashboard.layout')


@section('content')
        <h1>Crea una Categoria</h1>

        @include('dashboard.fragment._errors_form')

        <form action="{{route('category.store')}}" method="post">
           
            @include('dashboard.category._form')
            
        </form>
@endsection