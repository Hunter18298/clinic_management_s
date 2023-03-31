<?php 

include('connection.php');

if(isset($_POST['submit'])){
$dname=$_POST['dentist_name'];
$daddress=$_POST['dentist_address'];
$dphone=$_POST['dentist_phone'];
$dbirthdate=$_POST['dentist_birthdate'];
$demail=$_POST['dentist_email'];
$ddegree=$_POST['dentist_degree'];
$dspeciality=$_POST['dentist_speciality'];
$dgender=$_POST['dentist_gender'];
echo $dgender;
$time=time();
// echo $time;
$sql="insert into dentist(dentist_name,dentist_address, dentist_contact, birthdate,gender, dentist_degree, dentist_speciality,created_time, dentist_image) values('$dname','$daddress', '$$dphone','$dbirthdate','$dgender','$$ddegree','$dspeciality','$time','any.png')";
if(mysqli_query($con,$sql)){
    echo "done";
    header("location:addDentist.php");
    
}else{
    echo "error in connection";
       header("Refresh:2, url=index.php");
       exit();
}
}

?>