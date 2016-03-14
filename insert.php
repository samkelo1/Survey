<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store_survey";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$province= mysqli_real_escape_string($conn,$_POST['province']) ;
$store  =  mysqli_real_escape_string($conn,$_POST['store']) ;
$sites1 = mysqli_real_escape_string($conn,$_POST['site1']);
$sites2 = mysqli_real_escape_string($conn,$_POST['site2']);
$sites3 = mysqli_real_escape_string($conn,$_POST['site3']);
$sites4 = mysqli_real_escape_string($conn,$_POST['site4']);
$sites5 = mysqli_real_escape_string($conn,$_POST['site5']);
$sites6 = mysqli_real_escape_string($conn,$_POST['site6']);
$sites7 = mysqli_real_escape_string($conn,$_POST['site7']);
$sites8 = mysqli_real_escape_string($conn,$_POST['site8']);
$sites9 = mysqli_real_escape_string($conn,$_POST['site9']);
$sites10= mysqli_real_escape_string($conn,$_POST['site10']);


 $sql = "Insert into survey(province,store,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10)
values  ('$province','$store','$sites1','$sites2','$sites3','$sites4','$sites5','$sites6','$sites7','$sites8','$sites9','$sites10')";

echo $province;
if(mysqli_query($conn, $sql)){
 echo "Records added successfully.";
} else{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>