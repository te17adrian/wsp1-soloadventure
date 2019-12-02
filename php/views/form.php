<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
<form action="index.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">username</label>
    <input type="text" name="username" class="form-control"  placeholder="Enter username">
  </div>

    <div class="form-group">
        <label fro="description">description: </label>
        <textarea class="form-control" name="description" rows="3"></textarea>
    </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" name="remember" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" value="skicka" class="btn btn-primary">Submit</button>
</form>

<div class="mt-5">
<?php
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_SPECIAL_CHARS);
?>
<div class="card">
    <h5 class="card-header"><?= $username ?></h5>
    <div class="card-body">
        <p class="card-text"><?= $description ?></p>
        </div>
</div>
</body>
</html>