<?php

require_once ('includes/dbconnect.php');

require_once('includes/header.php');

if(isset($_POST['submit'])){
    $stmt = $conn->exec("INSERT INTO class (name) VALUES ('{$_POST['name']}')");
  //echo "INSERT INTO class (name) VALUES ('{$_POST['name']}')";
  header("location: index.php");
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