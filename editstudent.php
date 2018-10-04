<?php

require_once('includes/dbconnect.php');
require_once("includes/student.php");

require_once("includes/class.php");

require_once('includes/header.php');

$sql = $conn->query('SELECT * FROM class');
$claasresult = $sql->fetchAll(PDO::FETCH_CLASS, 'studentClass');


$stmt = $conn->query("SELECT * FROM students WHERE id = '{$_GET['id']}'");
$result = $stmt->fetchAll(PDO::FETCH_CLASS, 'students');

if(isset($_POST['update'])){
  $stmt = $conn->exec("UPDATE students SET name = '{$_POST['name']}', address = '{$_POST['address']}', dob = '{$_POST['dob']}', email = '{$_POST['email']}', phone = '{$_POST['phone']}'  WHERE id = '{$_GET['id']}'"
);
header('location: liststudents.php');
}

?>


        <div class="col-lg-9">

          <div class="card mt-4">
            <!-- <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt=""> -->
            <div class="card-body">
              <?php
                        foreach($result as $student){
                            ?>
                            <form method="POST">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?=$student->name?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="dob">Date Of Birth:</label>
                                    <input type="date" class="form-control" id="dob" name="dob"  value="<?= $student->dob?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" id="address" name="address"  value="<?= $student->address?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?= $student->email?>"   required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">phone:</label>
                                    <input type="number" class="form-control" id="phone" name="phone" value="<?= $student->phone?>"   required>
                                </div>

                                <div class="form-group">
                                <label for="classid">Choose Class:</label><br>
                                <select name="classid">
                                <?php foreach($claasresult as $listclass){
                                ?>
                                <option value="<?php $listclass->id ?>"><?php echo $listclass->id ?></option><br>
                                <br>
                                <?php
                                }
                                ?>
                                </select>
                            </div>

                                <button type="submit" class="btn btn-success" name="update">Submit</button>
                            </form>
                    <?php
                        }
                    ?>
                    
                
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