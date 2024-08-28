<?php

require __DIR__ . '/vendor/autoload.php';


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
  </head>
  <body>
  <?php include 'scriptt.php' ?>
    <?php $controllers = new App\controller\Controllers;
          // dump($controllers);        
          $controllers->is_set();
          $alert = new Public\view\Alert;
          $alert->alert();
          ?>
    <?php include 'editModal.php'?>



  <form action="/notes(copy)/index.php" method="post">
  <div class="container mt-5">
  <div class="mb-3">
    <label for="title" class="form-label">Notes</label>
    <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
  <label for="descript" class="form-label">Description</label>
  <textarea class="form-control" name="descript" id="descript" rows="3"></textarea>
</div>
  <button type="submit" name="create" class="btn btn-primary">Add notes</button>
  </div>
</form>

<div class="container">
    <?php $read = new Public\view\Read;
          $read->show();
    ?>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->
    
</body>
</html>