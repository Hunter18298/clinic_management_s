<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    session_start();

    include("connection.php");


if(isset($_SESSION['username'])){
        header("Location: home.php");
        exit();
}else{

    $u=$_POST['username'];
    $pass=$_POST['password'];
    if(empty($u) || empty($pass)){
        $error="please enter your username and password";
        echo $error;
    }else{
        $sql="select * from users where username='$u' and password='$pass' and status=1";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)!=0){
            $row=mysqli_fetch_array($result);
            
   
            $_SESSION['username']=$row['username'];
             header("Location: home.php");

           
        }else{
            
            $e="please enter correct username and password";
            echo $e;
            header("Refresh:2, url=index.php");
            exit();
        }
    }

}

?>