<?php 

include('connection.php');


$dname=$_POST['dentist_name'];
$daddress=$_POST['dentist_address'];
$dphone=$_POST['dentist_phone'];
$dbirthdate=$_POST['dentist_birthdate'];
$demail=$_POST['dentist_email'];
$ddegree=$_POST['dentist_degree'];
$dspeciality=$_POST['dentist_speciality'];
$dgender=$_POST['dentist_gender'];

$t=time();
$time=date("Y-m-d",$t);
// echo $time;
$sql="insert into dentist(`dentist_name`,`dentist_email`,`dentist_address`, `dentist_contact`, `birthdate`,`gender`, `degree`, `dentist_speciality`,`created_time`, `dentist_image`,`status`) values('$dname','$demail','$daddress', '$dphone','$dbirthdate','$dgender','$ddegree','$dspeciality','$time','any',1)";
if(mysqli_query($con,$sql)){
    echo "done";
    header("location:addDentist.php");
}else{
    echo "error in connection";
       header("Refresh:2, url=home.php");
}


?>