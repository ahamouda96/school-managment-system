<?php

if(isset($_POST['add'])){
    try {
        $conn = new PDO("mysql://hostname=localhost;dbname=school","root","");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully"; 

    $conn->exec("INSERT INTO teachers (email, address, phone) VALUES('{$_POST['email']}', '{$_POST['address']}', '{$_POST['phone']}')");

    echo ("INSERT INTO teachers (email, address, phone) VALUES('{$_POST['email']}', '{$_POST['address']}', '{$_POST['phone']}')");
       
    
    }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
}else if(isset($_POST['remove'])){
    try {
        $conn = new PDO("mysql://hostname=localhost;dbname=school","root","");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully"; 

    $conn->exec("DELETE FROM teachers WHERE id=2");
    
    }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
}


?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TazKarty</title>
    <link rel="icon" href="images/icon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><span>Taz</span>Karty</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html">Matches <span class="sr-only">(current)</span></a></li>
                <li><a href="teams.html">Teams</a></li>
                <li><a href="tournaments.html">Tournaments</a></li>
                <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li class="active"><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <h2 style="text-align: center;font-weight: bold">Login</h2>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST">
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" class="form-control" id="email" >
                </div>
                <div class="form-group">
                    <label for="pwd">address:</label>
                    <input type="text" name="address" class="form-control" id="pwd" >
                </div>
                <div class="form-group">
                    <label for="phone">phone:</label>
                    <input type="text" name="phone" class="form-control" id="phone" >
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" name="add" class="btn btn-success">Submit</button>
                <button type="submit" name="remove" class="btn btn-success">remove</button>
            </form>
        </div>
</div><!--end row-->
    <div class="row" style="margin: 20px auto;text-align: center">
        <div class="col-md-6 col-md-offset-3">
        <button type="submit" class="btn btn-primary"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i> Login with Facebook</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-google-plus-square fa-lg" aria-hidden="true"></i> Login with Google</button>
        </div>
    </div>
    <h3 class="col-md-6 col-md-offset-3">Don't Have Account? <a href="#">Sign Up</a></h3>
</div><!--end container-->
<footer>&copy; 2017 Copyrights Reserved</footer>
</body>
</html>