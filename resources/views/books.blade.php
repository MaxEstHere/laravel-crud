<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Books</title>
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
    <br>
    <form action = "/books" method = "post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
     
        <table>
           <tr>
              <td>title</td>
              <td><input type='text' name='title' /></td>
           </tr>
           <tr>
              <td>number of pages</td>
              <td><input type='number' name='number' /></td>
           </tr>
           <tr>
              <td>annotation</td>
              <td><input type='text' name='annotation' /></td>
           </tr>
           <tr>
              <td>author</td>
              <td><input type='text' name='author' /></td>
           </tr>
           <tr>
              <td colspan = '2'>
                 <input type = 'submit' value = "Add book"/>
              </td>
           </tr>
        </table>
 
     </form>
    <ul>
    @foreach($books as $book)
    <br><p>Title: {{$book->title}}<p><p>Author: <a href='/author/{{$book->author}}'>{{$book->author}}</a></p>
    <p>Image: {{$book->image}}</p>
    <p>Number of pages: {{$book->number}}</p><p>Annotation: {{$book->annotation}}</p>
    @endforeach
    </ul>
    </body>
    </html>