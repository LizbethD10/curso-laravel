@csrf
            
            
            <br>
            <body style="background-color:#599995c2;">
            </body>
            <label for="">Titulo</label>
            <input type="text" name="title" value="{{ old("title",$post->title) }}">
        
        

            <label for="">Slug</label>
            <input type="text" name="slug" value="{{ old("slug","",$post->slug) }}">
            <br>
            <br>
            
            
            <label for="">Categoria</label>
            <select name="category_id">
                <option value=""></option>
            @foreach ($categories as $title => $id)
                <option  {{ old("category_id","$post->category_id") == $id ? "selected" : "" }} value="{{$id}}">{{$title}}</option>
            @endforeach           
            </select>
            
            


            <label for="">Posteados</label>
            <select name="posted">
                <option {{ old("posted",$post->posted)== "yes" ? "selected" : "" }} value="yes">Si</option>
                <option {{ old("posted",$post->posted)== "not" ? "selected" : "" }}value="not">No</option>           
            </select>
            <br>
            <br>


            <label for="">Contenido</label>
            <textarea name="content">{{ old("content",$post->content) }}</textarea>
            <br>
            <br>


            <label for="">Descripccion</label>
            <textarea name="description">{{ old("description",$post->description) }}</textarea>
            <br>
            <br>

            @if ( isset($task) && $task == "edit")
                <label for="">Imagen</label>
                <input type="file" name="image" >
            @endif
                
            <br>
            <br>
                <button type="submit">Enviar </button>