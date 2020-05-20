<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Boolpress | Create</title>
    </head>
    <body>
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="form-group col-6">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" placeholder="Enter the title of the post" name="title">
                @error('title')
                    <span class="alert alert-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="title">Autore</label>
                <input type="text" class="form-control" placeholder="Enter the name of the author of the post" name="author">
                @error('author')
                    <span class="alert alert-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="title">Testo</label>
                <textarea class="form-control" rows="3" name="body">Enter the post text</textarea>
                @error('body')
                    <span class="alert alert-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="title">Excerpt</label>
                <textarea class="form-control" rows="2" name="excerpt">Enter the excerpt of the Post</textarea>
                @error('excerpt')
                    <span class="alert alert-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="title">Imagine</label>
                <input type="text" class="form-control" placeholder="Enter the url of the image" name="img">
                @error('img')
                    <span class="alert alert-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="true">Published</label>
                <input type="radio" id="true" name="published" value="1">
                <label for="false">Not published</label>
                <input type="radio" id="false" name="published" value="0">
                @error('published')
                    <span class="alert alert-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-6">
                <input type="submit" class="btn btn-primary" value="Salva">
            </div>
        </form>
        <div class="row">
            <div class="col-12">
                <a href="{{route('posts.index')}}">Torna all'indice</a>
            </div>
        </div>
    </body>
</html>
