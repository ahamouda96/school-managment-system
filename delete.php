<?php


require_once ('includes/dbconnect.php');

if(isset($_GET['id'])){
$conn->exec("DELETE from teachers WHERE id = '{$_GET['id']}'");
}
header("location: listteacher.php");


// // to select employees data
// if(isset($_GET['action']) && isset($_GET['action']) == 'delete' && isset($_GET['id'])){
//     $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
//     if($id > 0){
//         $sql = 'DELETE FROM employees WHERE id = :id';
//         $result = $con->prepare($sql);
//         $founduser = $result->execute(array(':id' => $id));
//         if($founduser === true){
//             $message = 'Employee deleted successfully';
//         }
//     }
// }

