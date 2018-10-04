<?php

require_once('includes/dbconnect.php');
require_once("includes/class.php");

require_once('includes/header.php');

$stmt = $conn->query("SELECT * FROM class WHERE id = '{$_GET['id']}'");
$result = $stmt->fetchAll(PDO::FETCH_CLASS, 'studentClass');

if(isset($_POST['update'])){
    $stmt = $conn->exec("UPDATE class SET name = '{$_POST['name']}' WHERE id = '{$_GET['id']}'");
    header('location: index.php');
}




//echo "UPDATE teachers SET name = ".'$result->name'.", address = ".'$result->address'.", age = ".'$result->age'.", salary = ".'$result->salary'."  WHERE id = '{$_GET['id']}'";

?>

        

    
        <div class="col-lg-9">

          <div class="card mt-4">
            <!-- <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt=""> -->
            <div class="card-body">
            	<?php foreach($result as $class){ ?>
            	
              <form method="POST" autocomplete="off">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $class->name; ?>" required>
                </div>
                <button type="submit" class="btn btn-success" name="update">Update</button>
              </form>
          <?php }?>
            </div>
          </div>
        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>

<?php
    include_once('includes/footer.php');
?>
