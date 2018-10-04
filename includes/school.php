<?php

require_once 'connect.php';
require_once 'employee.php';

if(isset($_POST['add'])){

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
    $salary = filter_input(INPUT_POST, 'salary', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $tax = filter_input(INPUT_POST, 'tax', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    $params = array(
        ':name' => $name,
        ':age' => $age,
        ':address' => $address,
        ':salary' => $salary,
        ':tax' => $tax
    );

    // update
    if(isset($_GET['action']) && isset($_GET['action']) == 'edit' && isset($_GET['id'])){
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $sql = 'UPDATE employees SET name = :name, address = :address, age =  :age , tax = :tax , salary = :salary WHERE id = :id';
        $params[':id'] = $id;
    }else{
        $sql =  'INSERT INTO employees SET name = :name, address = :address, age =  :age , tax = :tax , salary = :salary';
    }

    
    // prepare() => prepares a statment for excution and returns a statement object to prevent sql injection 
    $statment = $con->prepare($sql);
    if($statment->execute($params) === true){
        $message = 'Employee ' . $name . ' saving successfully';
    }else{
        $error = true;
        $message = 'Employee '. $name .' not saving to database';
    }
}

// to select employees data
if(isset($_GET['action']) && isset($_GET['action']) == 'edit' && isset($_GET['id'])){
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if($id > 0){
        $sql = 'SELECT * FROM employees WHERE id = :id';
        $result = $con->prepare($sql);
        $founduser = $result->execute(array(':id' => $id));
        if($founduser === true){
            $user = $result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'employee', array('name', 'address', 'age', 'salary', 'tax'));
            $user = array_shift($user);
        }
    }
}

// to select employees data
if(isset($_GET['action']) && isset($_GET['action']) == 'delete' && isset($_GET['id'])){
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if($id > 0){
        $sql = 'DELETE FROM employees WHERE id = :id';
        $result = $con->prepare($sql);
        $founduser = $result->execute(array(':id' => $id));
        if($founduser === true){
            $message = 'Employee deleted successfully';
        }
    }
}





$sql = 'SELECT * FROM employees';
$stmt = $con->query($sql);
// FETCH_PROPS_LATE => call the constructor before settings the properties
$result = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'employee', array('name', 'address', 'age', 'salary', 'tax'));
$result = (is_array($result) && !empty($result)) ? $result : false;
//var_dump($result);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
    <div class="wrapper">
        <h2>Add Employee</h2>
        <div class="empform">
            <form method="POST" autocomplete="off">
                <input type="text" name="name" placeholder="enter your name" required value="<?= isset($user) ? $user->name : '' ?>"/>
                <input type="number" name="age" min="16" max="60" placeholder="enter your age" required value="<?= isset($user) ? $user->age : '' ?>"/>
                <input type="text" name="address" placeholder="enter your address" required value="<?= isset($user) ? $user->address : '' ?>"/>
                <input type="number" name="salary" min="1500" max="9999" step="0.01" placeholder="enter your salary" required value="<?= isset($user) ? $user->salary : '' ?>"/>
                <input type="number" name="tax" min="1" max="5" step="0.01" placeholder="enter your tax" required value="<?= isset($user) ? $user->tax : '' ?>"/>
                <input type="submit" name="add"/>
            </form>
        </div>
        <div class="employees">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Salary</th>
                        <th>Tax (%)</th>
                        <th>controls</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(false !== $result){
                        foreach($result as $empObj){
                    ?>
                    <tr>
                        <td><?= $empObj->name ?></td>
                        <td><?= $empObj->age ?></td>
                        <td><?= $empObj->address ?></td>
                        <td><?= $empObj->calcSalary() ?>L.E</td>
                        <td><?= $empObj->tax ?></td>
                        <td>
                            <a href="/advanced/PDO/?action=edit&id=<?= $empObj->id ?>"><i class="fa fa-edit"></i></a>
                            <a href="/advanced/PDO/?action=delete&id=<?= $empObj->id ?>" onclick="if(!confirm('do you want to delete this employee')) return false;"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <?php        
                        }
                    }else{
                    ?>
                        <td colspan="5">sorry no employees to list</td> 
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <?php if(isset($message)){ ?> 
        <p class="message"><?php isset($error) ? 'error' : ''?><?php echo $message ?></p>
    <?php } ?>
    
</body>
</html>
