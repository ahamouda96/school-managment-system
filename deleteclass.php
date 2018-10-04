<?php


require_once ('includes/dbconnect.php');

if(isset($_GET['id'])){
    $conn->exec("DELETE from class WHERE id = '{$_GET['id']}'");
}
header("location: listclasses.php");
