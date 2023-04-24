<!-- home page ka lagal style.css rabt kraya lagal Bootsrap 5 
ka awish css framework achy online a loway eshakanman rektru asantr bka,
lagal app.js "la app.js zanyariakan nusraya"-->
<?php 
include('connection.php'); 
ob_start();
session_start();
if (!isset($_SESSION['username'])) {

  header('Location: ../index.php');
exit();
}
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
    <script>
		$(document).ready(function() {
			$("#searchForm").on("submit", function(event) {
				event.preventDefault();
				var query = $("#searchQuery").val();
				$.ajax({
					url: "search.php",
					method: "POST",
					data: {query: query},
					dataType: "html",
					success: function(response) {
						$("#searchResults").html(response);
					}
				});
			});
		});
	</script>
    <script>
		$(document).ready(function() {
			$("#searchFormApp").on("submitApp", function(event) {
				event.preventDefault();
				var query = $("#searchQueryApp").val();
				$.ajax({
					url: "searchApp.php",
					method: "POST",
					data: {query: query},
					dataType: "html",
					success: function(response) {
						$("#searchResultsApp").html(response);
					}
				});
			});
		});
	</script>
    <script>
		$(document).ready(function() {
			$("#profile").on("submit", function(event) {
				event.preventDefault();
			var query = $("#searchQueryApp").val();
				$.ajax({
					url: "doctor_profile.php",
					method: "GET",
					
					dataType: "html",
					success: function(response) {
						$("#profile-doctor").html(response);
					}
				});
			});
		});
	</script>
    <style>
      .image{
    clip-path: circle();
    object-fit: cover;
    background-position: center;
    background-size: cover;
    width: 100% !important;
    height: 5vh;
}
     .img-header{
    clip-path: circle();
    object-fit: cover;
    background-position: center;
    background-size: cover;

    height: 5vh;
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
    </style>
  </head>
  <body>
   <?php
$username=$_SESSION['username']; 
   $patientsSql="select * from patients where `dentist_username`='$username' ";
   $appointmentSql="select * from appointment where `dentist_username`='$username'";
   $treatmentSql="select * from treatment where `dentist_username`='$username'";
   $prescriptionSql="select * from prescription where `dentist_username`='$username'";
   
   
   
   $patientResult=mysqli_query($con,$patientsSql);
   $prescriptionResult=mysqli_query($con,$prescriptionSql);
   $treatmentResult=mysqli_query($con,$treatmentSql);
   $appointmentResult=mysqli_query($con,$appointmentSql);
$appointmentCount=mysqli_num_rows($appointmentResult);
  $prescriptionCount=mysqli_num_rows($prescriptionResult);
$patientsCount=mysqli_num_rows($patientResult);
   
   ?>
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
          <a href="logout.php" style="text-decoration:none ; color:white;">logout</a>
          <img class="img-header" src="../images/profile.jpg" alt="profile image" >
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


      </div>
      <!-- lera hata xware har section ak id y taybat baxoy haya 
    ka la app.js ba runi baskraya loway aw bashay peshandaw awanidi bshartawa -->
      <div class="col main-screen" id="first">
<h1>Dashboard</h1>
<span class="box" style="margin-left: 0;">
  <div class="box-div">
    <h2><?php echo $patientsCount ?></h2><i class="fa-solid fa-clock fa-2x"></i>

    <hr>
    <h5>Patients</h5>
  </div>
    <button class="btn btn-primary show-patient" ><h4>More info</h4></button>
</span>
<span class="box" >
  <div class="box-div">
    <h2><?php echo $appointmentCount ?></h2><i class="fa-solid fa-calendar-check fa-2x" ></i>

    <hr>
    <h5>Appoinments</h5>
  </div>
    <button class="btn btn-primary show-appointment"><h4>More info</h4></button>
</span>
<span class="box" >
  <div class="box-div">
    <h2><?php echo $prescriptionCount  ?></h2><i class="fa-sharp fa-solid fa-file-prescription fa-2x"></i>

    <hr>
    <h5>Prescription</h5>
  </div>
    <button class="btn btn-primary show-prescription"><h4>More info</h4></button>
</span>
      </div>


  
      <div class="col main-patient" id="second">
        <h1>Patient</h1>

<span class="patient-title">
  <button class=" btn btn-primary"><a href="addPatient.php">Add Patient</a></button>
   <form action="export_patients.php" method="get">
  <button class="btn exports btn-outline-success" type="submit" name="submitEXCEL" >Export</button>
</form>
</span>
 <br><hr>
<form id="searchForm" action="">
   <div class="input-group mb-3 w-25">
  <span class="input-group-text btn-success" id="inputGroup-sizing-default "><button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button></span>
  <input type="text" id="searchQuery" name="query" class="form-control" placeholder="Search...." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
</form>
<div id="searchResults"></div>

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
  <?php
  if(mysqli_num_rows($patientResult)>0){
  while($row=mysqli_fetch_assoc($patientResult))
  {
?>
  <tr >
    <td><div class="up-banner">
          <img class="image" src="<?php echo $row['patient_image'] ?>" alt="profile image"  >
        </div></td>
    <td><?php echo $row['patient_name']; ?></td>
    <td>April 28, 1999</td>
    <td>07504453750</td>
    <td>aliomer@gmail.com</td>
    <td><button  class="table-status btn btn-primary ">Active</button></td>
     <td><a href="delete_patient.php?id=<?php echo $row['patient_id']; ?>"><button class="actions btn btn-danger"><i class="fa-sharp fa-solid fa-trash "></i></button></a><a href="edit_patients.php?id=<?php echo $row['patient_id']; ?>"><button  class="actions btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button></a></td>
  </tr>
  <?php
  }
}
?>
 </table>
      </div>
    <!------end of Patients-------------->
    
<div class="col " id="third">
  <h3>4</h3>
</div>

<!-----------------Treatment------------>

   <div class="col main-treatment" id="fourth">
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
    <?php
  if(mysqli_num_rows($patientResult)>0){
  while($row=mysqli_fetch_assoc($patientResult))
  {
?>
  <tr >
    <td>  <?php echo $row['services'] ?></td>
    <td><?php echo $row['treatment'] ?></td>
    <td><?php echo $row['prices'] ?>$ per unit</td>
    
    
     <td><a href="delete_treatment.php?id=<?php echo $row['id']; ?>"><button class="actions btn btn-danger"><i class="fa-sharp fa-solid fa-trash "></i></button></a><a href="edit_treatment.php?id=<?php echo $row['id']; ?>"><button  class="actions btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button></a></td>
  </tr>
   <?php
 }
}
?>
 </table>
      </div>

   <div class="col main-appointment" id="fifth">
        <h1>Appointment</h1>

<span class="appointment-title">
  <button class=" btn btn-primary"><a href="addAppointment.php">Add Appointment</a></button>
</span>
 <br><hr>
<form id="searchFormApp" action="">
   <div class="input-group mb-3 w-25">
  <span class="input-group-text btn-success" id="inputGroup-sizing-default "><button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button></span>
  <input type="text" name="query" id="searchQuery" name="query" class="form-control" placeholder="Search...." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
</form>
<div id="searchResultsApp"></div>

 <table class="tables">
  <tr>
    <th>Patient Name</th>
    <th>Date Submitted</th>
    <th>Appointment Date</th>
    <th>Start Time</th>
    <th>Status</th>
    <th>Actions</th>
  </tr>
       <?php 

if(mysqli_num_rows($appointmentResult)>0){
  while($row=mysqli_fetch_assoc($appointmentResult))
  {
?>

 <tr >
     <td><?php echo $row['patient_name'] ?></td>
    <td>April 28, 2022</td>
        <td>April 28, 2022</td>
    <td>10:00 AM</td>
    <td> <td><button  class="table-status btn btn-primary">Treated</button></td></td>
     <td><a href="delete_appointment.php?id=<?php echo $row['id']; ?>"><button class="actions btn btn-danger"><i class="fa-sharp fa-solid fa-trash "></i></button></a><a href="edit_appointment.php?id=id=<?php echo $row['id']; ?>"><button  class="actions btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button></a></td>
  </tr>
  <?php
  }
}
  
  ?>
 </table>
      </div>
       <div class="col main-prescription" id="sixth">
        <form action="prescription_generation.php" method="post">
          
          <label>Patient Name</label>
          <input type="text" name="patient_name"> <br>
            <label>Birthdate</label>
          <input type="text" name="patient_birthdate"> <br>
            <label> Age </label>
          <input type="text" name="patient_age"> <br>
          <label> Description </label><br>
          <textarea  name="description" rows="4" cols="50">
</textarea><br>
  <select name="patient_gender" id="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
    
  </select>

          <input class="btn btn-primary " type="submit" name="prescription" value="prescription">
        </form>
</div>


       </div>
<!--- end of row------->
</div>

  </div>
  <script src="doc.js"></script>
  </body>

</html>
