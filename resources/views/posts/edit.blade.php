<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Boolpress | Edit</title>
    </head>
    <body>
        <form action="{{route('posts.update', $post->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group col-6">
                <label for="title">Title</label>
                <input type="text" class="form-control" placeholder="Enter the title of the post" name="title" value="{{(!empty(old('title') )) ?  old('title') : $post->title}}">
            </div>
            <div class="form-group col-6">
                <label for="title">Author</label>
                <input type="text" class="form-control" value="{{$post->author}}" name="author">
            </div>
            <div class="form-group col-6">
                <label for="title">Text</label>
                <textarea class="form-control" rows="3" name="body">{{$post->body}}</textarea>
            </div>
            <div class="form-group col-6">
                <label for="title">Excerpt</label>
                <textarea class="form-control" rows="2" name="excerpt">{{$post->excerpt}}</textarea>
            </div>
            <div class="form-group col-6">
                <label for="title">Imagine</label>
                <input type="text" class="form-control" value="{{$post->img}}" name="img">
            </div>
            <div class="form-group col-6">
                <label for="true">Published</label>
                <input type="radio" id="published" name="published" value="1" {{(old('published') == 1) ? 'checked' : ''}}>
                <label for="false">Not published</label>
                <input type="radio" id="not-published" name="published" value="0" {{(old('published') == 0) ? 'checked' : ''}}>
            </div>
            <div class="form-group col-6">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
        <div class="row">
            <div class="col-12">
                <a href="{{route('posts.index')}}">Go back to the index</a>
            </div>
        </div>
    </body>
</html>
