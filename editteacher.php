<?php

require_once('includes/dbconnect.php');
require_once("includes/teachers.php");
require_once('includes/header.php');


$stmt = $conn->query("SELECT * FROM teachers WHERE id = '{$_GET['id']}'");
$result = $stmt->fetchAll(PDO::FETCH_CLASS, 'teachers');

if(isset($_POST['update'])){
  $stmt = $conn->exec("UPDATE teachers SET name = '{$_POST['name']}', address = '{$_POST['address']}', age = '{$_POST['age']}', salary = '{$_POST['salary']}'  WHERE id = '{$_GET['id']}'"
);
header('location: listteacher.php');
}


//echo "UPDATE teachers SET name = ".'$result->name'.", address = ".'$result->address'.", age = ".'$result->age'.", salary = ".'$result->salary'."  WHERE id = '{$_GET['id']}'";

?>

        <div class="col-lg-9">
                    <?php
                        foreach($result as $teacher){
                            ?>
                            <form method="POST">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?= $teacher->name?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="age">Age:</label>
                                    <input type="number" class="form-control" id="age" name="age"  value="<?= $teacher->age?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" id="address" name="address"  value="<?= $teacher->address?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="salary">salary:</label>
                                    <input type="text" class="form-control" id="salary" name="salary"  value="<?= $teacher->salary?>" required>
                                </div>
                                <button type="submit" class="btn btn-success" name="update">Submit</button>
                            </form>
                    <?php
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

<?php
    include_once('includes/footer.php');
?>
