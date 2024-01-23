@extends('dashboard.layout')


@section('content')
        <h1>Crea un Post</h1>

        @include('dashboard.fragment._errors_form')

        <form action="{{route('post.store')}}" method="post">
           
            @include('dashboard.post._form')
            
        </form>
@endsection