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
</head>
 <body>
   <div class="container-fluid">
   <table>
    <tr>
        <th> <img src="images/logo.png" width="130" height="100" ></td>
        <th > <h1> <b style=" color:skyblue;">Cihan</b> Clinic </h1> </td>
        <th width="400"> <h2> <strong> Dr. </strong> anyone </h2> </td>
    </tr>
   
   </table>
    <div class="horizontal-line"></div>

   <form action="">

    <table>
        <tr><th> <h3>Patient Name:</h3> </th> <td><h4>{{patient_name}}</h4> </td></tr>
        <tr> <th> <h3> Birthdate: </h3></th> <td><h4>{{birthdate}}</h4> </td></tr>
        <tr> <th><h3>Gender: </h3> </th> <td> <h4>{{gender}}</h4> </td>   <th> <h3> Age: </h3> </th> <td> <h4>{{age}}</h4> </td>  </tr>

    </table>
   </form>
   </div>
 </body>
</html>