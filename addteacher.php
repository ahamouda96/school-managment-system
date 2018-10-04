<?php

require_once('includes/header.php');

require_once ('includes/dbconnect.php');

if(isset($_POST['submit'])){
  $stmt = $conn->exec("INSERT INTO teachers (name, age, address, salary) VALUES('{$_POST['name']}', '{$_POST['age']}', '{$_POST['address']}', '{$_POST['salary']}')");
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
                    <label for="age">Age:</label>
                    <input type="number" class="form-control" id="age" name="age" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="salary">salary:</label>
                    <input type="text" class="form-control" id="salary" name="salary" required>
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
 include_once('includes/footer.php')
 ?>