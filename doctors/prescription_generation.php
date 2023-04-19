<?php
session_start();
include('connection.php');

require __DIR__ ."/vendor/autoload.php"; 
use Dompdf\Dompdf;
use Dompdf\Options;
if(isset($_POST['prescription'])){
    $name=$_POST['patient_name'];
    $birthdate=$_POST['patient_birthdate'];
    $age=$_POST['patient_age'];
    $gender=$_POST['patient_gender'];
    $description=$_POST['description'];
    $username=$_SESSION['username'];
    
    $t=time();
$time=date("d-m-Y",$t);
$options=new options;
$options->setChroot(__DIR__);
$options->setDefaultPaperSize("A4");
$dompdf=new Dompdf($options);
$html=file_get_contents("prescription.php");
$html=str_replace(["{{patient_name}}","{{birthdate}}","{{age}}","{{gender}}","{{date}}","{{description}}","{{username}}"],[$name,$birthdate,$age,$gender,$time,$description,$username],$html);
$dompdf->loadHtml($html);
//render pdf
$dompdf->render();
//send it to browser
//["Attachment"=>0] to view pdf inside browser default value is 1
$dompdf->stream("prescription.pdf",["Attachment"=>0]);
}


?>