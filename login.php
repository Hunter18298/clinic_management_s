<?php
// session_start();
include('connection.php');
if(isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from users where username='$username' and password='$password'";
$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result)==1){
    // $_SESSION['username']=$username;
    header('Location: home.php');
}else{
    echo "<p style='color:black;'>error</p>";
}
}

?>