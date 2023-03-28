<!-- home page ka lagal style.css rabt kraya lagal Bootsrap 5 
ka awish css framework achy online a loway eshakanman rektru asantr bka,
lagal app.js "la app.js zanyariakan nusraya"-->
<?php 
include('connection.php');
// ob_start();
// session_start();
// if (!isset($_SESSION['username'])) {
//   header('Location: index.php');
// }
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
  </head>
  <body>
         <!-- <button><a href="logout" value="<?php session_destroy(); header('location:index.php'); ?>">logout</a></button> -->
    <!-- <h4 class="count">index</h4> -->
    <div class="container-fluid">
          <div class="row">
       <div class="col-4">
        <!-- nusini sarey chap -->
         <div class="up-banner">
          <h1>Cihan Clinic</h1>
        </div>
       </div>
       <!-- rsmy sare lay rast -->
  

        <div class="col">
         <div class="up-banner">
          <img class="image" src="images/profile.jpg" alt="profile image" >
        </div>
       </div>
      </div>
    </div>
    <div class="horizontal-line"></div>
    <div class="container-fluid">
    <div class="row">
      <div class="col-4 text-center options" style="
    padding-left: 0px;">
    <!-- option tab aw tab ay dasta chap dagritawa ka backgroundy rasha
          harwa 8 bashi tedaya dashboard, dentist.......etc -->
<div class="options-tab">
  <button class="options-btn "><i class="fa-solid fa-house" ></i>Dashboard</button>

</div>
<div class="options-tab">
  <button class="options-btn "><i class="fa-solid fa-user-doctor"></i>Dentist</button>

</div>
<div class="options-tab">
  <button class="options-btn"><i class="fa-solid fa-hospital-user"></i>Patients</button>

</div>
<div class="options-tab">
  <button class="options-btn"><i class="fa-solid fa-clock"></i>Schedule</button>

</div>
<div class="options-tab">
  <button class="options-btn"><i class="fa-solid fa-stethoscope"></i>Treatment</button>

</div>
<div class="options-tab">
  <button class="options-btn"><i class="fa-solid fa-calendar-check"></i>Appoinment</button>

</div>
<div class="options-tab">
  <button class="options-btn"><i class="fa-sharp fa-solid fa-file-prescription"></i>Prescription</button>

</div>
<div class="options-tab">
  <button class="options-btn"><i class="fa-solid fa-globe"></i>Website</button>

</div>

      </div>
      <!-- lera hata xware har section ak id y taybat baxoy haya 
    ka la app.js ba runi baskraya loway aw bashay peshandaw awanidi bshartawa -->
      <div class="col main-screen" id="first">
<h1>Dashboard</h1>
<span class="box" style="margin-left: 0;">
  <div class="box-div">
    <h2>22</h2><i class="fa-solid fa-clock fa-2x"></i>

    <hr>
    <h5>Patients</h5>
  </div>
    <button class="btn btn-primary"><h4>More info</h4></button>
</span>
<span class="box" >
  <div class="box-div">
    <h2>5</h2><i class="fa-solid fa-calendar-check fa-2x" ></i>

    <hr>
    <h5>Appoinments</h5>
  </div>
    <button class="btn btn-primary"><h4>More info</h4></button>
</span>
<span class="box" >
  <div class="box-div">
    <h2>23</h2><i class="fa-sharp fa-solid fa-file-prescription fa-2x"></i>

    <hr>
    <h5>Prescription</h5>
  </div>
    <button class="btn btn-primary"><h4>More info</h4></button>
</span>
      </div>

<!------------------Dentist------------------------------------>

   <div class="col main-dentist" id="second">

<h1>Dentist</h1>
<span class="dentist-title">
  <button class=" btn btn-primary"><a href="addDentist.php">Add Dentist</a></button>
</span>
 <br><hr>

 <table class="tables">
  <tr>
    <th>Images</th>
    <th>Name</th>
    <th>Speciality</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Status</th>
    <th>Actions</th>
  </tr>
  <tr >
    <td><div class="up-banner">
          <img class="image" src="images/profile.jpg" alt="profile image" >
        </div></td>
    <td>Ali Omer</td>
    <td>Oral Surgery</td>
    <td>07504453750</td>
    <td>aliomer@gmail.com</td>
    <td><button  class="table-status btn btn-primary ">Active</button></td>
     <td><button class="actions btn btn-danger"><i class="fa-sharp fa-solid fa-trash "></i></button><button  class="actions btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button></td>
  </tr>
  <tr>
    <td><div class="up-banner">
          <img class="image" src="images/profile.jpg" alt="profile image" >
        </div></td>
    <td>Ali Omer</td>
    <td>Oral Surgery</td>
    <td>07504453750</td>
    <td>aliomer@gmail.com</td>
    <td><button  class="table-status btn btn-primary">Active</button></td>
    <td><button class="actions btn btn-danger"><i class="fa-sharp fa-solid fa-trash "></i></button><button  class="actions btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button></td>
  </tr>
 </table>


      </div>
      <div class="col main-patient" id="third">
        <h1>Patient</h1>

<span class="patient-title">
  <button class=" btn btn-primary"><a href="addPatient.php">Add Patient</a></button>
</span>
 <br><hr>
 <div class="input-group mb-3 w-25">
  <span class="input-group-text btn-success" id="inputGroup-sizing-default "><i class="fa-solid fa-magnifying-glass"></i></span>
  <input type="text" class="form-control" placeholder="Search...." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

 <table class="tables">
  <tr>
    <th>Images</th>
    <th>Name</th>
    <th>Birth-Date</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Status</th>
    <th>Actions</th>
  </tr>
  <tr >
    <td>images</td>
    <td>Ali Omer</td>
    <td>April 28, 1999</td>
    <td>07504453750</td>
    <td>aliomer@gmail.com</td>
    <td><button  class="table-status btn btn-primary ">Active</button></td>
     <td><button class="actions btn btn-danger"><i class="fa-sharp fa-solid fa-trash "></i></button><button  class="actions btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button></td>
  </tr>
  <tr>
    <td>images</td>
    <td>Ali Omer</td>
    <td>February 1, 2001</td>
    <td>07504453750</td>
    <td>aliomer@gmail.com</td>
    <td><button  class="table-status btn btn-primary">Active</button></td>
    <td><button class="actions btn btn-danger"><i class="fa-sharp fa-solid fa-trash "></i></button><button  class="actions btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button></td>
  </tr>
 </table>
      </div>
    <!------end of Patients-------------->
    
<div class="col " id="fourth">
  <h3>4</h3>
</div>

<!-----------------Treatment------------>

   <div class="col main-treatment" id="fifth">
        <h1>Treatment</h1>

<span class="treatment-title">
  <button class=" btn btn-primary">Add Treatment</button>
</span>
 <br><hr>
 <div class="input-group mb-3 w-25">
  <span class="input-group-text btn-success" id="inputGroup-sizing-default "><i class="fa-solid fa-magnifying-glass"></i></span>
  <input type="text" class="form-control" placeholder="Search...." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

 <table class="tables">
  <tr>
    <th>Services</th>
    <th>Treatment</th>
    <th>Prices</th>
    <th>Actions</th>
  </tr>
  <tr >
    <td>Cosmetic Dentistry</td>
    <td>Direct Composite Venners</td>
    <td>4,000 $ per unit</td>
    
    
     <td><button class="actions btn btn-danger"><i class="fa-sharp fa-solid fa-trash "></i></button><button  class="actions btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button></td>
  </tr>
 <tr >
    <td>Cosmetic Dentistry</td>
    <td>Indirect Composite Venners</td>
    <td>4,000 $ per unit</td>
    
   
     <td><button class="actions btn btn-danger"><i class="fa-sharp fa-solid fa-trash "></i></button><button  class="actions btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button></td>
  </tr>
 </table>
      </div>

   <div class="col main-appointment" id="sixth">
        <h1>Appointment</h1>

<span class="appointment-title">
  <button class=" btn btn-primary"><a href="addAppointment.php">Add Appointment</a></button>
</span>
 <br><hr>
 <div class="input-group mb-3 w-25">
  <span class="input-group-text btn-success" id="inputGroup-sizing-default "><i class="fa-solid fa-magnifying-glass"></i></span>
  <input type="text" class="form-control" placeholder="Search...." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

 <table class="tables">
  <tr>
    <th>Patient Name</th>
    <th>Date Submitted</th>
    <th>Appointment Date</th>
    <th>Start Time</th>
    <th>Status</th>
    <th>Actions</th>
  </tr>
  <tr >
    <td>Mahmud Ahmed</td>
    <td>April 28, 2022</td>
        <td>April 28, 2022</td>
    <td>09:00 AM</td>
    <td> <td><button  class="table-status btn btn-success">Confirmed</button></td></td>
     <td><button class="actions btn btn-danger"><i class="fa-sharp fa-solid fa-trash "></i></button><button  class="actions btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button></td>
  </tr>
 <tr >
     <td>Hassan Mazin</td>
    <td>April 28, 2022</td>
        <td>April 28, 2022</td>
    <td>10:00 AM</td>
    <td> <td><button  class="table-status btn btn-primary">Treated</button></td></td>
     <td><button class="actions btn btn-danger"><i class="fa-sharp fa-solid fa-trash "></i></button><button  class="actions btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button></td>
  </tr>
 </table>
      </div>
<!--- end of row------->
</div>

  </div>
  <script src="app.js"></script>
  </body>

</html>
