

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
            alert("Insert Successful!");
        </script>
    @endif
</head>
<body>
<div class="container">
    <form method="post">
        {{csrf_field()}}
        <div class="form-group" style="width: 30%;">
            <label for="">Name: </label>
            <input class="form-control" size="20" type="text" name="bookName">
        </div>
        <div class="form-group" style="width: 30%;">
            <label for="">Price: </label>
            <input class="form-control" type="number" name="bookPrice">
        </div>
        <a href="/book">
            <input type="button" value="List" class="btn btn-primary">
        </a>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
</div>
</body>
</html>
