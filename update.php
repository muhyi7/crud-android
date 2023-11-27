<?php
if(!empty($_POST['data']) && !empty($_POST['id'])){    
$data = $_POST['id'];
$data = $_POST['data'];
$con = mysqli_connect('localhost', 'root', '', 'crud');
if ($con) {
    $sql = "update crud_table set data = '".$data."' where id = ". $id;
    if(mysqli_query($con, $sql)){
        echo "Success";
        }
        else echo "Update operation failed";
    } else echo "Failed to connect database";
}
