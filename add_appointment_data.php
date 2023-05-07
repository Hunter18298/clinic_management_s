<?php 

include('connection.php');

if(isset($_POST['submit'])){
$pname=$_POST['appointment_name'];
$pappointmentId=$_POST['appointment_patient_id'];
$appointmentdate=$_POST['appointment_date'];
$sybmitteddate=$_POST['sybmitted-date'];
    if(!empty($_POST['type'])) {
        $appointment=$_POST['type'];
        }else{
            echo "no data is provided";
        }

$pstarttime=$_POST['start_time'];
// $t=time();
// $time=date("Y-m-d",$t);
$sql="insert into appointment(`patient_name`,`appointment_date`,`start_time`,`status`,`appointment_patient_id`,`appointment_type`,`sybmitted-date`) values('$pname','$appointmentdate','$pstarttime',
1,
'$pappointmentId',	
'$appointment','$sybmitteddate')";
if(mysqli_query($con,$sql)){
    echo "Data Entered Successfully";
    header("location:home.php");
    
}else{
    echo "Error: " . mysqli_error($con);
    header("Location:addAppontment.php");
       
}
}
    
 // Close the connection
  mysqli_close($con);



?>
