<?php
require_once ('includes/dbconnect.php');

if(isset($_POST['submit'])){
    $stmt = $conn->exec("INSERT INTO class (name) VALUES ('{$_POST['name']}')");
  //echo "INSERT INTO class (name) VALUES ('{$_POST['name']}')";
  header("location: listclasses.php");
}