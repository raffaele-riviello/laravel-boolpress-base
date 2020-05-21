<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Boolpress | Show</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{$post->title}}</h2>
                    <small>Author: {{$post->author}}</small>
                    <div class="col-12">
                        <img class="rounded mx-auto d-block" src="{{$post->img}}" alt="{{$post->title}}" style="max-width: 50%;">
                    </div>

                    <div>
                        {!! $post->body !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{route('posts.index')}}">Go back to the index</a>
                </div>
            </div>
        </div>
    </body>
</html>
