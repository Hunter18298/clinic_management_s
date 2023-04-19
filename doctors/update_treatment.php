<?php 

include('connection.php');


$dname=$_POST['dentist_name'];
$id=$_POST['id'];
$services=$_POST['services'];
$treatment=$_POST['treatment'];
$prices=$_POST['prices'];

   
$t=time();
$time=date("Y-m-d",$t);
// echo $time;

$sql="UPDATE treatment SET `services`='$services',`treatment`='$treatment',`dentist_username`='$dname',`prices`='$prices',`updated_time`='$time' WHERE id='$id'
";

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

