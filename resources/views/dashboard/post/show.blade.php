@extends('dashboard.layout')


@section('content')

        <body style="background-color:#599995c2;">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->posted}}</p>
        <p>{{ $post->description }}</p>
        <div>{{ $post->content }}</div>
      
@endsection