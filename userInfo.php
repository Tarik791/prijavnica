<?php 
include_once('insert.php');


$usname = $_POST['usname'];
$dob = $_POST['dob'];


$sql = "INSERT INTO option (name, dob) VALUE ('$usname','$dob')";

if(!mysqli_query($con, $sql)){
    echo 'Not insered';
}else {
    echo 'Inserted';
}


?>