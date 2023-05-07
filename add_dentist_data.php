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
$dpassword=$_POST['dentist_password'];
  $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
$t=time();
$time=date("Y-m-d",$t);
// echo $time;
 if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
$sql="insert into dentist(`dentist_name`,`dentist_email`,`dentist_address`, `dentist_contact`, `birthdate`,`gender`, `degree`, `dentist_speciality`,`created_time`, `dentist_image`,`status`) values('$dname','$demail','$daddress', '$dphone','$dbirthdate','$dgender','$ddegree','$dspeciality','$time','$target_file',1)";
$createUserSql="insert into users(`username`,`email`,`password`,`status`,`phone_number`,`role`)values('$dname','$demail','$dpassword',1,'$dphone','doctor')";
if(mysqli_query($con,$sql) && mysqli_query($con,$createUserSql)){
    echo "done";
    header("location:home.php");
}else{
    echo "<script>
    history.back();
    $('#first').css('display','inline-block');
    $('#second').css('display','none');
    $('#third').css('display','none'); 
     $('#fourth').css('display','none'); 
        $('#fifth').css('display','none'); 
            $('#sixth').css('display','none'); 
            $('#seventh').css('display','none');
             $('#eighth').css('display','none');
    </script>";
    // echo "error in connection";
    //    header("Refresh:2, url=addDentist.php");
}

} else{
        echo "Sorry, there was an error uploading your file.";
    }
   // Close the database connection
    mysqli_close($con);
?>