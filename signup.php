<!doctype html>
<head>
    <script type="text/javascript" src="verify.js"></script>
</head>
<body>
<?php
include 'form.php';

$server = "localhost";
$user = "root";
$pass = "";
$database = "projectDB";

$con = mysqli_connect($server, $user, $pass, $database);

$firstName = $_POST["fname"]; 
$lastName = $_POST["lname"]; 
$email = $_POST["email"];
$password = $_POST["password"];


$query = mysqli_query($con,"SELECT Email FROM Accounts WHERE Email='$email'");

if(mysqli_num_rows($query) > 0){
    echo "<script>
    location.href = 'form.php';
    alert('An account already exists with this email.');
    </script>";
}else{
    $queryy = "INSERT INTO `Accounts` (firstName, lastName, Email, Passwordd)
    VALUES ('$firstName','$lastName','$email','$password');"; 
    mysqli_query($con, $queryy);
    echo "<script>
    location.href = 'page1.html';
    alert('Welcome to El Bet Baytak!');
    </script>";
} 

?>

</body>
</html>