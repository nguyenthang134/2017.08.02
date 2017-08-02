<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 8/2/17
 * Time: 2:43 PM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
    @if(isset($message))
        <script>
            alert("Deleted");
        </script>
    @endif
</head>
<body>
    <div class="container">
        <div class="row">

        </div>
    </div>
    <div class="container">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Create date</th>
                <th>Action</th>
            </tr>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->price}}</td>
                    <td>{{$book->created_at}}</td>
                    <td>
                        <a href="book/delete?id={{$book->id}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="container">
        <a href="book/insertBook">
            <button class="btn btn-primary">Insert</button>
        </a>
    </div>
</body>
</html>
