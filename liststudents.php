<?php


require_once('includes/dbconnect.php');
require_once("includes/student.php");

require_once('includes/header.php');

$stmt = $conn->query('SELECT * FROM students');
$result = $stmt->fetchAll(PDO::FETCH_CLASS, 'students');


?>


        <div class="col-lg-9">
            <h1>Students List</h1>
        <table>
                <thead>   
                    <tr>
                        <th>Name</th>
                        <th>Date Of Birth</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>controlls</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($result as $student){
                            ?>
                            <tr>
                                <td><?= $student->name ?></td>
                                <td><?=$student->dob?></td>
                                <td><?=$student->address?></td>
                                <td><?=$student->email?></td>
                                <td>
                                    <a class="btn btn-danger" onclick="if(!confirm('do you want to delete this employee')) return false;" style="text-decoration:none;color:#fff" href="deletestudent.php?id=<?= $student->id ?>&dbnae='key'">delete</a>
                                    <a class="btn btn-success" style="text-decoration:none;color:#fff;margin-left: 5px" href="editstudent.php?id=<?= $student->id ?>"> edit</a>
                                </td>
                            </tr>
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
   include_once('includes/footer.php')
   ?>