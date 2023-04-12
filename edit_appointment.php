<?php
session_start();
include('connection.php');
$id=$_GET['id'];
echo $id;
$sql="SELECT * FROM appointment WHERE id='$id'";

$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Management</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/466eacef29.js" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
    <style>
     
        h4{
            
            margin: 5%;
            font-weight: bold;
        }
        input{
            display: block;
            margin: 5%;
            border-radius: 5px;
              box-sizing: border-box;
            border: 0px solid #006BB9;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
            box-shadow: 10px 5px 10px #47B5FF;
            font-family:'Montserrat', sans-serif !important;
        }
        input:focus{
            padding: 0 1%;
            border:1px solid #ccc;
        }
        label{
          font-family:'Montserrat', sans-serif !important;
          text-align:center !important;
          margin:2% 0 2% 0;
        }
        input[type=radio]
        {
          border-radius: 5px;
              box-sizing: border-box;
            border: 0px solid #006BB9;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
            box-shadow: none;
          display:inline-block !important;
          width:20% !important;

        }
        .row{
            background-color: #FFFF;
        }
        .center{
            padding: 5%;
        }
    </style>
  </head>
  <body>
    <!-- <h4 class="count">index</h4> -->
    <!--UPBANNER-->
    <div class="container-fluid">
     
          <div class="row">
       <div class="col-4">
         <div class="up-banner">
          <h1>Cihan Clinic</h1>
        </div>
       </div>
        <div class="col">
         <div class="up-banner">
          <img class="image" src="images/profile.jpg" alt="profile image" >
        </div>
       </div>
      </div>
    </div>
    <div class="horizontal-line"></div>
 <div class="center ">
  <!--yellow button-->
  <!-- button a loway bgaretawa home.php -->
     <span  >
          <a href="home.php">  <button class="btn btn-warning"><i class="fa-solid fa-house"></i></button></a>
        </span>
        <!--form-->
                <!-- Formaka 1 row u 2 column a ka dabash kraya ba bootsrap css y 
      loway baynian habi w rek bn lagal yakdi -->
    <form action="update_appointment.php" method="post">
    <div class="container-fluid justify-content-center align-items-center">
       
            <div class="d-flex text-center justify-content-center align-items-center">
                <h3 style="font-weight: bold; margin-left:0; margin-bottom:1%;">Add Appointment</h4>
                
            </div>
            <div class="horizontal-line"></div>
       <div class="justify-content-center align-items-center text-center">
        <h4 class="btn btn-primary" style="width: 50%; font-size:1.5rem;" >Set Appointment</h4>
       </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-2" style="margin-top: 0.2rem;">
             <h4>Patient_ID</h4> <br>  
             <h4>Patient_ID</h4> <br>  
            <h4>Name</h4>  <br>
             
              <h4>Date</h4><br>
              <h4>start time</h4><br>
            </div>
            <div class="col-lg-2" >
              <input type="text" name="appointment_patient_id" id="appointment_id" value="<?php echo $row['appointment_patient_id'] ?>" autocomplete="off"><br>
              <input type="text" name="id" id="id" value="<?php echo $row['id'] ?>" autocomplete="off"><br>
              
                <input type="text" name="appointment_name" value="<?php echo $row['patient_name'] ?>" id="appointment_name" autocomplete="off"><br>  
                
                <input type="date" name="appointment_date" value="<?php echo $row['appointment_date'] ?>" id="appointment_date" autocomplete="off"><br>
                 <input type="text" name="start_time" value="<?php echo $row['start_time'] ?>" id="start_time" autocomplete="off"><br>
                 <input type="text" name="dentist_name" value="<?php echo $row['dentist_username'] ?>" id="start_time" autocomplete="off"><br>
                        
                </div>
                  <label for="emergency">Emergency</label>          
                <input type="radio"  name="type" id="emergency" value="emergency"  >
                <label for="normal">Normal</label>
                <input type="radio"  name="type" id="normal" value="normal" >
                            
                        </div>
                  <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                            <input class=" btn btn-primary  " style="width: 50%;" type="submit" name="submit"> 
                    </div>
                  </div>
                    </div>
                </form>
                </div>

                  </div>
                  <script src="app.js"></script>
                  </body>

                </html>
