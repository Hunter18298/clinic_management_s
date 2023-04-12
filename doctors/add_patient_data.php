<?php 
session_start();
include('connection.php');


$dname=$_POST['patient_name'];
$daddress=$_POST['patient_address'];
$dphone=$_POST['patient_phone'];
$dbirthdate=$_POST['patient_birthdate'];
$demail=$_POST['patient_email'];
$dage=$_POST['patient_age'];
$dgender=$_POST['patient_gender'];
$dentist_name=$_SESSION['username'];
   $target_dir1 = "../images/";
    $target_file1 = $target_dir1 . basename($_FILES["image"]["name"]);
//    $target_dir2 = "../images/";
//     $target_file2 = $target_dir2 . basename($_FILES["image"]["name"]);
$t=time();
$time=date("Y-m-d",$t);
// echo $time;
 if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file1)){
$sql="insert into patients(`patient_name`, `patient_email`, `patient_address`,  `patient_contact`, `birthdate`, `gender`,  `age`, `created_time`, `patient_image`,`status`,`dentist_username`)
values('$dname','$demail','$daddress', '$dphone','$dbirthdate','$dgender','$dage','$time','$target_file1',1,'$dentist_name')";

if(mysqli_query($con,$sql)){
    echo "done";
    header("location:home.php");
}else{
    echo "error in connection";
       header("Refresh:2, url=addpatient.php");
}
} else{
        echo "Sorry, there was an error uploading your file.";
    }
   // Close the database connection
    mysqli_close($con);

?>

