<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <a href="?id=1">
      <img src="../img/solo.svg" height="100px" >
      </a>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="?id=1">Spel</a>
        <a class="nav-link" href="#">Om</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <div class="card">
      <div class="card-body">
    <h1 class="cover-heading"></h1>
    <p class="lead"><?= $story['body'] ?></p>
      </div>
    </div>
    <div class="button">
    <p class="lead">
    <?php foreach ($links as $link): ?>
      <a href="?id=<?= $link['target_id'] ?>" class="btn btn-lg btn-secondary"><?= $link['description'] ?></a>
    <?php endforeach ?>
    </p>
    </div>
  </main>

  <footer class="mastfoot mt-auto">
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>