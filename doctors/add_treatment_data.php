<?php 
session_start();
include('connection.php');


$dname=$_SESSION['username'];
$services=$_POST['services'];
$treatment=$_POST['treatment'];
$prices=$_POST['prices'];

   
$t=time();
$time=date("Y-m-d",$t);
// echo $time;

$sql="insert into treatment(`services`,`treatment`,`dentist_username`,`prices`,`created_time`)
values('$services','$treatment','$dname','$prices','$time')";

if(mysqli_query($con,$sql)){
    echo "done";
    header("location:addTreatment.php");
}else{
    echo "error in connection";
       header("location:addTreatment.php");
}

   // Close the database connection
    mysqli_close($con);

?>

