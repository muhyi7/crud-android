<?php
$data = array();
$con = mysqli_connect('localhost', 'root', '', 'crud');
if ($con) {
    $sql = "select * from crud_table";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) != 0){
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $data[$i] = $row;
            $i++;
        }
        echo json_encode($data);
    }
}else echo "Failed to connect to database";
