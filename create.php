<?php
$con = mysqli_connect('localhost', 'root', '', 'crud');
if($con){
    $sql = "insert into crud_table (data)"
}
else echo "Failed to connect to database";