<?php
session_start();
include('connection.php');
$id=$_GET['id'];
echo $id;
$sql="SELECT * FROM dentist WHERE id='$id'";

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
      /*-- + boootstrap   ---*/
        h4{
            
            margin: 5%;
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
 <div class="center">
    <!--yellowButton-->
    <!-- button a loway bgaretawa home.php -->
     <span >
          <a href="home.php">  <button class="btn btn-warning"><i class="fa-solid fa-house"></i></button></a>
        </span>
        <!--form-->
                <!-- Formaka 1 row u 2 column a ka dabash kraya ba bootsrap css y 
      loway baynian habi w rek bn lagal yakdi --> 
    <form action="update_doctor.php" method="post" enctype="multipart/form-data">
    <div class="container-fluid">
       
            <div class="d-flex text-center">
                <h4 style="font-weight: bold; margin-left:0; margin-bottom:1%;">Add Dentist</h4>
                
            </div>
            <div class="horizontal-line"></div>
       
        <div class="row">
            <div class="col-lg-2">
              <h4>Name</h4>  <br>
              <h4>Address</h4> <br>
              <h4>Phone No</h4><br>
              <h4>Email</h4>  <br>
              <h4>Birthdate</h4>  <br>
             
            </div>
            <div class="col-lg-2">
                <input type="text" name="dentist_name" required id="dentist_name" value="<?php echo $row['dentist_name'] ?>" autocomplete="off"><br>
     
<input type="text" name="dentist_address" value="<?php echo $row['dentist_address'] ?>"  required id="dentist_address" autocomplete="off"><br>
<input type="number" name="dentist_phone" value="<?php echo $row['dentist_contact'] ?>" required id="dentist_phone" autocomplete="off"><br>
   
<input type="email" name="dentist_email" value="<?php echo $row['dentist_email'] ?>" required id="dentist_email" autocomplete="off"><br>
   
<input type="date" name="dentist_birthdate" value="<?php echo $row['birthdate'] ?>" required id="dentist_birthdate" autocomplete="off"><br>
            </div>
                   <div class="col-lg-2">
              <h4>Degree</h4>  <br>
              <h4>Speciality</h4> <br>
              <h4>Gender</h4><br>
                <h4>id</h4> <br>
            </div>
            <div class="col-lg-2">
                <input type="text" value="<?php echo $row['degree'] ?>" name="dentist_degree" required  id="dentist_degree" autocomplete="off"><br>
     
<input type="text" name="dentist_speciality" value="<?php echo $row['dentist_speciality'] ?>" required id="dentist_speciality" autocomplete="off"><br>
<input type="text" name="dentist_gender" value="<?php echo $row['gender'] ?>" required id="dentist_gender" autocomplete="off"><br>
<input type="text" name="dentist_id" value="<?php echo $id ?>" required id="dentist_id" autocomplete="off"><br>

<input class=" btn btn-primary" type="file" name="image"  value="Upload an Image" accept="*" >
<button class=" btn btn-primary" name="submit" type="submit">Submit</button>
            </div>
        </div>
    </div>
 </form>
 </div>

  </div>
  <script src="app.js"></script>
  </body>

</html>
