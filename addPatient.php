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

    <!-- button a loway bgaretawa home.php -->
 
    <div class="center">
     <span >
          <a href="home.php">  <button class="btn btn-success"><i class="fa-solid fa-house"></i></button></a>
        </span>
        <!-- Formaka 1 row u 2 column a ka dabash kraya ba bootsrap css y 
      loway baynian habi w rek bn lagal yakdi -->
    <form action="add_patient_data.php" method="post">
    <div class="container-fluid">
       
            <div class="d-flex text-center">
                <h4 style="font-weight: bold; margin-left:0; margin-bottom:1%;">Add Patient</h4>
                
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
                <input type="text" name="patient_name" id="patient_name" autocomplete="off"><br>
     
<input type="text" name="patient_address" id="patient_address" autocomplete="off"><br>
<input type="text" name="patient_phone" id="patient_phone" autocomplete="off"><br>
   
<input type="text" name="patient_email" id="patient_email" autocomplete="off"><br>
   
<input type="text" name="patient_birthdate" id="patient_birthdate" autocomplete="off"><br>
            </div>
                   <div class="col-lg-2">
              <h4>Degree</h4>  <br>
              <h4>Speciality</h4> <br>
              <h4>Gender</h4><br>
               
            </div>
            <div class="col-lg-2">
                <input type="text" name="patient_name" id="patient_name" autocomplete="off"><br>
     
<input type="text" name="patient_address" id="patient_address" autocomplete="off"><br>
<input type="text" name="patient_phone" id="patient_phone" autocomplete="off"><br>

<input class=" btn btn-success" type="button" value="Upload an Image">
            </div>
        </div>
    </div>
 </form>
 </div>

  </div>
  <script src="app.js"></script>
  </body>

</html>
