<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "projectDB";

$con = mysqli_connect($server, $user, $password, $database);

$email = $_POST["email"];
$password = $_POST["password"];


$query1 = mysqli_query($con,"SELECT Email FROM Accounts WHERE Email='$email'");
$query2 = mysqli_query($con,"SELECT Passwordd FROM Accounts WHERE Passwordd='$password'");

if(mysqli_num_rows($query1) > 0 && mysqli_num_rows($query2) > 0){

    echo "<script> 
    location.href = 'page1.html';
    alert('Log in successful');
    </script>";

}else if(mysqli_num_rows($query1) > 0 && mysqli_num_rows($query2) == 0){
    echo "<script> 
    location.href = 'login.php';
    alert('Login failed. Wrong Password.');
    </script>";

}else if(mysqli_num_rows($query1) == 0){
    echo "<script> 
    location.href = 'login.php';
    alert('Login failed. Email does not exist.');
    </script>";
}
  
?>
