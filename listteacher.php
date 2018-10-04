<?php


require_once('includes/dbconnect.php');
require_once("includes/teachers.php");

require_once('includes/header.php');

$stmt = $conn->query('SELECT * FROM teachers');
$result = $stmt->fetchAll(PDO::FETCH_CLASS, 'teachers');


?>

  <head>

   
    <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin-top: 50px
      }
      th{ background-color: #555; color: #f1f1f1}
      td, th {
        border: 1px solid #999;
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {
          background-color: #f1f1f1;
      }
      
      a{
        text-decoration: none;
      }
    </style>

  </head>

        <div class="col-lg-9">
          <h1>Teachers List</h1>
        <table>
                <thead>   
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Salary</th>
                        <th>controlls</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($result as $teacher){
                            ?>
                            <tr>
                                <td><?= $teacher->name ?></td>
                                <td><?=$teacher->age?></td>
                                <td><?=$teacher->address?></td>
                                <td><?=$teacher->salary?></td>
                                <td>
                                    <a class="btn btn-danger" onclick="if(!confirm('do you want to delete this employee')) return false;" style="text-decoration:none;color:#fff" href="delete.php?id=<?= $teacher->id ?>">delete</a>
                                    <a class="btn btn-success" style="text-decoration:none;color:#fff;margin-left: 5px" href="editteacher.php?id=<?= $teacher->id ?>"> edit</a>
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
include_once('includes/footer.php');
?>