<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Boolpress | Index</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <th>Title</th>
                            <th>Author</th>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td><a href="{{route('posts.show', $post->slug)}}">{{$post->title}}</a></td>
                                <td>Author: {{$post->author}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{route('posts.create')}}">Insert a new post</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{route('posts.published')}}">List of published posts</a>
                </div>
            </div>
        </div>
    </body>
</html>
