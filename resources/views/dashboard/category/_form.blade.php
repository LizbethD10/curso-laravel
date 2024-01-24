@csrf
            
            
            
            <body style="background-color:#599995c2;">
            </body>
            <label for="">Titulo</label>
            <input type="text" name="title" value="{{ old("title",$category->title) }}">
              

            <label for="">Slug</label>
            <input type="text" name="slug" value="{{ old("slug","",$category->slug) }}">
            <br>
            <br>
        
       
                <button type="submit">Enviar </button>