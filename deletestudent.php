<?php


require_once ('includes/dbconnect.php');

if(isset($_GET['id'])){
$conn->exec("DELETE from students WHERE id = '{$_GET['id']}'");
}
header("location: liststudents.php");
