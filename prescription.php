<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prescription.css">
    <title>Document</title>
     <script src="https://kit.fontawesome.com/466eacef29.js" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
    <style>
       .patient-info {
      font-size: 18px;
      margin-bottom: 50px;
      font-weight:500;
    }
    /* h1{
      font-size: 40px;
      font-weight:bold;
    /* }*/ 
  	.footer {
			background-color: #005AA7;
			color: #fff;
			padding: 10px;
			text-align: center;
			position: fixed;
			bottom: 0;
			left: 0;
			right: 0;
		}
		
		.footer p {
			margin: 0;
			font-size: 12px;
		} 
		
		.prescription {
			margin: 20px;
			border: 1px solid #ddd;
			padding: 20px;
			box-shadow: 0px 0px 5px #ddd;
		}
		
		.prescription h2 {
			margin-top: 0;
			font-size: 18px;
			font-weight: bold;
			text-align: center;
			margin-bottom: 10px;
		}
		
		.prescription p {
			margin: 0;
			font-size: 14px;
			line-height: 1.5;
		}
		
		.prescription ul {
			margin-top: 10px;
			margin-bottom: 0;
			padding-left: 20px;
			list-style-type: square;
			font-size: 14px;
			line-height: 1.5;
		}
		
		.prescription ul li {
			margin-bottom: 10px;
		}
    </style>
</head>
 <body>
   <div class="body-prescription">
   <table>
    <tr>
        <th> <img src="images/logo.png" width="130" height="100" ></td>
        <th > <h1> <b style=" color:skyblue;">Cihan</b> Clinic </h1> </td>
        <th width="400"> <h2> <strong> Dr. </strong> anyone </h2> </td>
    </tr>
   
   </table>
    <div class="horizontal-line"></div>
   



    <main class="prescription">
        <div class="patient-info details">
   <label>Patient Name:</label> {{patient_name}}<br>
   <div style="height:50px;"></div>
   <label>Birthdate:</label> {{birthdate}}<br>
   <div style="height:50px;"></div>
      <label>Age:</label>{{age}}<br>
      <div style="height:50px;"></div>
      <label>Gender:</label>{{gender}}<br>
      <div style="height:50px;"></div>
    </div>
		
		<h2>RX</h2>
		<h4>{{description}}</h4>
       <div style="height:250px;"></div>
       <div style="height:250px;"></div>   

       
		<p><strong>Date:</strong> {{date}}</p>
		
		
		<h2>Doctor Signiture</h2>
		<p>.............................................................</p>
	</main>


   <footer>
 <img class="img-footer" width="100%"  src="images/pre-footer.png">   
   </footer>
 </body>
</html>



