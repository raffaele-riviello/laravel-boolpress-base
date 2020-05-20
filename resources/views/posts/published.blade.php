<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Boolpress | Published</title>
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
                        @foreach ($postsPublished as $post)
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
                    <a href="{{route('posts.index')}}">Go back to the index</a>
                </div>
            </div>
        </div>
    </body>
</html>
