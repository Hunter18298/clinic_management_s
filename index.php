<!-- login page a lagal login css rabt kraya -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Management</title>
    <link rel="stylesheet" href="login.css">
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
        <div class="box">
            <img src="images/logo.png" alt="clinic_logo" class="image">
            <h1>Cihan Clinic</h1>
             <div class="horizontal-line"></div>
             <br>
             <div class="horizontal-line" style="background-color:#1E1E1E;"></div>
             <h3>Dental Clinic</h3>
             <form action="login.php" method="post">
                <input type="text" name="username" placeholder="Enter your username"  required autocomplete="off">
                <input type="password" name="password" placeholder="Enter your password"  required autocomplete="off">
                <input class="btn btn-primary" type="submit" value="submit">
                <a href="home.php">
                    home
                </a>
             </form>
        </div>
  </div>
  <script src="app.js"></script>
  </body>
</html>
