<?php 

include('connection.php');


$dname=$_POST['patient_name'];
$daddress=$_POST['patient_address'];
$dphone=$_POST['patient_phone'];
$dbirthdate=$_POST['patient_birthdate'];
$demail=$_POST['patient_email'];
$dage=$_POST['patient_age'];
$dgender=$_POST['patient_gender'];
echo $dage;
echo $dname;
echo $dgender;
echo $demail;
echo $daddress;
echo $dbirthdate;
$t=time();
$time=date("Y-m-d",$t);
// echo $time;
$sql="insert into patients(`patient_name`, `patient_email`, `patient_address`,  `patient_contact`, `birthdate`, `gender`,  `age`, `created_time`, `patient_image`,`status`) 
values('$dname','$demail','$daddress', '$dphone','$dbirthdate','$dgender','$dage','$time','any',1)";
if(mysqli_query($con,$sql)){
    echo "done";
    header("location:home.php");
}else{
    echo "error in connection";
       header("Refresh:2, url=addpatient.php");
}


?>