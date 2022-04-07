<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "projectDB";

$con = mysqli_connect($server, $user, $password, $database);

$email = $_POST["email"];


$query1 = mysqli_query($con,"SELECT Email FROM Accounts WHERE Email='$email'");

if(mysqli_num_rows($query1) > 0){
    echo "<script> 
    location.href = 'login.php';
    alert('An email has been sent to your accounts email address. Please check your email to continue. If you are still having problems, please contact us.');
    </script>";

}else{
    echo "<script>
    location.href = 'forget.php';
    alert('Email does not exist. Try a different one.');
    </script>";
}

  
?>
