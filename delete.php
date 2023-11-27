<?php
if(!empty($_POST['id'])){    
    $data = $_POST['id'];
    $con = mysqli_connect('localhost', 'root', '', 'crud');
    if ($con) {
        $sql = "delete from crud_table where id = " . $id;
        if(mysqli_query($con, $sql)){
            echo "Success";
        }
        else echo "Failed to insert data";
    } else echo "Failed to connect to database";
}
