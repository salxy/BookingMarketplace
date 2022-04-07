<?php

$server = "127.0.0.1";
$user = "root";
$password = "";
$database = "projectDB";

$con = mysqli_connect($server, $user, $password, $database);


$title = $_POST["titleR"];
$name = $_POST["nname"];
$phoneNum = $_POST["number"];
$governorate = $_POST["gov"];
$city = $_POST["city"];
$priceN = $_POST["price1"];
$priceP = $_POST["price2"];
$bed = $_POST["pers"];
$amenity = $_POST["amen"];

$var = "";  

foreach($amenity as $v){  
   $var .= $v." -- ";  
}

$queryy = "INSERT INTO `Rooms` (Title, oName, PhoneNumber, Governorate, City, PriceN, PriceP, Beds, Amenities) 
VALUES ('$title','$name','$phoneNum','$governorate','$city','$priceN','$priceP','$bed','$var')"; 

$result = mysqli_query($con, $queryy);

if($result==true){  
      echo "<script>
      alert('Inserted Successfully');
      location.href = 'page1.html';
      </script>";  
}else{  
      echo "<script>
      alert('Failed To Insert');
      location.href = 'offering.php';
      </script>";  
}  

?>