<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Authors</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
    
    <ul>
    @foreach($books as $book)
    
    @if($book->author === $name)
    <br><li><p>Book: {{$book->title}}<p><a href='/books/{{ $book->id }}'>Delete</a></li>
    
    @endif
 
    @endforeach

    </ul>
    </body>
    </html>