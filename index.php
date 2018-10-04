<?php


require_once('includes/dbconnect.php');
require_once("includes/class.php");
require_once('includes/header.php');

$stmt = $conn->query('SELECT * FROM class');
$result = $stmt->fetchAll(PDO::FETCH_CLASS, 'studentClass');


?>

    
    <div class="col-lg-9">
        <h1>Classes List</h1>
    <table>
            <thead>   
                <tr>
                    <th>Name</th>
                    <th>Controls</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($result as $studentclass){
                        ?>
                        <tr>
                            <td><?= $studentclass->name ?></td>
                            <td>
                                <a class="btn btn-danger" onclick="if(!confirm('do you want to delete this employee')) return false;" style="text-decoration:none;color:#fff" href="deleteclass.php?id=<?= $studentclass->id ?>&dbnae='key'">delete</a>
                                <a class="btn btn-success" style="text-decoration:none;color:#fff;margin-left: 5px" href="editclass.php?id=<?= $studentclass->id ?>"> edit</a>
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
