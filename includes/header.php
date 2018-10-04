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
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin-top: 50px
      }
      th{ background-color: #555; color: #f1f1f1}
      td, th {
        border: 1px solid #999;
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {
          background-color: #f1f1f1;
      }
      footer{
        margin-top: 230px;
        
      }
      a{
        text-decoration: none;
      }
    </style>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">School</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="liststudents.php">All Student
                <!--<span class="sr-only">(current)</span>-->
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listteacher.php">All Teacher</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">All Class</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">All Subjects</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">School</h1>
          <div class="list-group">
            <a href="addstudent.php" class="list-group-item active">Add Student</a>
            <a href="addteacher.php" class="list-group-item">Add Teacher</a>
            <a href="addclass.php" class="list-group-item">Add Class</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->
