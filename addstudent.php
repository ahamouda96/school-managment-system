<?php

require_once ('includes/dbconnect.php');

require_once("includes/class.php");

require_once('includes/header.php');

$sql = $conn->query('SELECT * FROM class');
$claasresult = $sql->fetchAll(PDO::FETCH_CLASS, 'studentClass');

// echo '<pre>';
// var_dump( $result);
// echo '</pre>';

foreach($claasresult as $studentClass){
 // echo $classid = $studentClass->id;
}

if(isset($_POST['submit'])){
  $stmt = $conn->exec("INSERT INTO students (name, dob, address, email, phone, class_id) VALUES('{$_POST['name']}', '{$_POST['dob']}', '{$_POST['address']}', '{$_POST['email']}', '{$_POST['phone']}', '{$_POST['classid']}')");
  header('location: liststudents.php');

 // "select s.name as `student name` , c.name as classname from student as s,class as c where c.id=s.class.id"
}


?>
        <div class="col-lg-9">

          <div class="card mt-4">
            <!-- <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt=""> -->
            <div class="card-body">
              <form method="POST" autocomplete="off"> 
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date Of Birth:</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="number" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="classid">Choose Class:</label><br>
                    <select name="classid">
                    <?php 
                    foreach($claasresult as $listclass){
                    
                       echo "<option value={$listclass->id}>{$listclass->name}</option>";
                 
                 
                    }
                    ?>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-success" name="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->
<?php
    include_once('includes/footer.php');
?>