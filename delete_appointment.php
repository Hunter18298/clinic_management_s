<?php


include('connection.php');

$id=$_GET['id'];


$sql="DELETE FROM dentist WHERE id='$id'";
if(mysqli_query($con,$sql)){
    header("location:home.php");
    exit();
}else{
    echo "error ".mysqli_connect_errno();
     header("location:home.php");
    exit();
}
?>