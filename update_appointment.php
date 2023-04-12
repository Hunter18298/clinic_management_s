<?php 

include('connection.php');

if(isset($_POST['submit'])){
$pname=$_POST['appointment_name'];
$id=$_POST['id'];
$dname=$_POST['dentist_name'];
$pappointmentId=$_POST['appointment_patient_id'];
$appointmentdate=$_POST['appointment_date'];
    if(!empty($_POST['type'])) {
        $appointment=$_POST['type'];
        }else{
            echo "no data is provided";
        }

$pstarttime=$_POST['start_time'];

$time=time();
$sql="UPDATE appointment SET `patient_name`='$pname',`appointment_date`='$appointmentdate',`start_time`='$pstarttime',`status`=1,`appointment_patient_id`='$pappointmentId',`appointment_type`='$appointment',`dentist_username`='$dname' where id='$id'";
if(mysqli_query($con,$sql)){
    echo "Data Entered Successfully";
    header("Refresh:10,url=home.php");
    
}else{
    echo "Error: " . mysqli_error($con);
    header("Location:update_appontment.php?id='$id'");
       
}
}
    
 // Close the connection
  mysqli_close($con);



?>
