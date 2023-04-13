<?php
include('connection.php');
$id=$_GET['id'];

$sql="SELECT * FROM dentist WHERE `id`='$id'";
// Execute SQL statement
$result = $con->query($sql);

// Generate HTML output
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
    <script src='https://kit.fontawesome.com/466eacef29.js' crossorigin='anonymous'></script>
      <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&display=swap' rel='stylesheet'>
<script src='https://code.jquery.com/jquery-3.6.1.js' integrity='sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI='
    crossorigin='anonymous'></script>
    <title>Document</title>
    <style>
        img{
            
         
            border-radius: 40px !important;
          border-collapse: separate;
          overflow: hidden;
    perspective: 1px;
        }
        .pad-to-right{
            padding-left: 40%;
        }
        .doctor{
            padding: 20%;
            padding-top:5%;
        }
    </style>
</head>
<body>
   <?php
    echo " <section class='doctor'>
        <div class='container-fluid' >
            <div class='row' style='background-color:white;'>
                <div class='col-lg-6'>
                    <h1>PROFILE</h1>
                    <h5>Dr.".$row['dentist_name']."</h5><br> 
                    <p>MBBS</p> 
                    <p>Cihan International Hospital</p>
                    <p>Erbil, Kurdistan, Iraq</p> <br>
                    <h1>Speciality</h1>
                    <div >
                        <span class='btn btn-success'>".$row['dentist_speciality']."</span>
                         
                    </div> <br>
                     <h1>CONTACT</h1>
                     <p>".$row['dentist_email']."</p>
                    <p>".$row['dentist_contact']."</p> <br> 
                      <h1>ADDRESS</h1>
                     <p>".$row['dentist_address']."</p>
                </div>
                <div class='col-lg-6 justify-content-end'>

                    <img src='".$row['dentist_image']."' width='30%' hight='auto'><br><br>
                        <h5 >".$row['degree']."</h5><br> <br><br>
                        <img src='images/logo.png' width='30%' hight='auto'>
                </div>
            </div>
        </div>
    </section>
";
  }}else {
  echo "No results found.";
}

// Close database connection
$con->close();




?>
</body>
</html>

