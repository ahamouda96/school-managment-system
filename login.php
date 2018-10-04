<?php


?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
    <style>
      .container{
        margin: auto;
      }
    </style>

  </head>
  
  <body>
        <div class="container">
            <form method="POST" autocomplete="off">
                <div class="form-group">
                    <label for="name">Email:</label>
                    <input type="text" class="form-control" id="name" name="Email" required>
                </div>
                <div class="form-group">
                    <label for="age">Password:</label>
                    <input type="text" class="form-control" id="age" name="Password" required>
                </div>
                <button type="submit" class="btn btn-success" name="submit">Submit</button>
              </form>
          </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
