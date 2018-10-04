<?php

require_once ('includes/dbconnect.php');

if(isset($_GET['id'] && $_GET['dbname'] == 'students')){
$conn->exec("DELETE from students WHERE id = '{$_GET['id']}'");
header("location: liststudent.php");
}else if(isset($_GET['id'] && $_GET['dbname'] == 'teachers')){
    $conn->exec("DELETE from teachers WHERE id = '{$_GET['id']}'");
    header("location: list.php");
}else if(isset($_GET['id'] && $_GET['dbname'] == 'class')){
    $conn->exec("DELETE from class WHERE id = '{$_GET['id']}'");
    header("location: listclasses.php");
}



