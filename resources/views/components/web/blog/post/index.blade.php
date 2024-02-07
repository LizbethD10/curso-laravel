 
    {{ $slot }}
    {{ $header }}

    @foreach ($posts as $p)
        <div class="card card bg-slate-300  mb-3">
            <h3> {{ $p->title}} </h3>
            <a href="{{ route("web.blog.show",$p) }}">Ir</a>
            <p> {{ $p->description }}</p>
        </div>    
    @endforeach
    
    {{ $footer }}
    {{ $extra }}



    {{ $posts->links() }}