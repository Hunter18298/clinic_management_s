a<?php 

include('connection.php');

$id=$_POST['dentist_id'];
$dname=$_POST['dentist_name'];
$daddress=$_POST['dentist_address'];
$dphone=$_POST['dentist_phone'];
$dbirthdate=$_POST['dentist_birthdate'];
$demail=$_POST['dentist_email'];
$ddegree=$_POST['dentist_degree'];
$dspeciality=$_POST['dentist_speciality'];
$dgender=$_POST['dentist_gender'];

   $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
  
$t=time();
$time=date("Y-m-d",$t);
// echo $time;
 if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
$sql="UPDATE dentist SET `dentist_name`='$dname',`dentist_email`= '$demail',`dentist_address`= '$daddress', `dentist_contact`='$dphone', `birthdate`= '$dbirthdate',`gender`='$dgender', `degree`='$ddegree', `dentist_speciality`='$dspeciality',`updated_time`='$time', `dentist_image`='$target_file',`status`='1' WHERE id='$id'";
$createUserSql="UPDATE users SET`username``='$dname',`dentist_email`= '$demail',``phone_number`='$dphone' WHERE id='$id'";
if(mysqli_query($con,$sql) && mysqli_query($con,$createUserSql)){
    echo "done";
    header("location:home.php");
}else{
    echo "error in connection";
       header("Refresh:2, url=edit_doctor.php?id=$id");
}

 } else{
        echo "Sorry, there was an error uploading your file.";
    }
   // Close the database connection
    mysqli_close($con);
?>
