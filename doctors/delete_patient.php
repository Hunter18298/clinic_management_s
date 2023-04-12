<?php
session_start();

include('connection.php');

$id=$_GET['id'];
$username=$_SESSION['username'];

$sql="DELETE FROM patients WHERE patient_id='$id' and dentist_username='$username'";
if(mysqli_query($con,$sql)){
    header("location:home.php");
    exit();
}else{
    echo "error ".mysqli_connect_errno();
     header("location:home.php");
    exit();
}
?>