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


 $province = $_POST['province'];
 $store = $_POST['store'];
 $sites1 = $_POST['site1'];
 $sites2 = $_POST['site2'];
 $sites3 = $_POST['site3'];
 $sites4 = $_POST['site4'];
 $sites5 = $_POST['site5'];
 $sites6 = $_POST['site6'];
 $sites7 = $_POST['site7'];
 $sites8 = $_POST['site8'];
 $sites9 = $_POST['site9'];
 $sites10 = $_POST['site10'];
if (isset($_POST["submit"])) {

 if($_POST["ddl1"] == "Select...")
  $province = 1;

 if($_POST["ddl2"] == NULL)
  $store = 1;

 if($_POST["site1"] == NULL)
  $sites = 1;

  if($_POST["site2"] == NULL)
  $sites2 = 1;

 if($_POST["site3"] == NULL)
  $sites = 1;

 if($_POST["site4"] == NULL)
  $sites = 1;

 if($_POST["site6"] == NULL)
  $sites = 1;

 if($_POST["site7"] == NULL)
  $sites = 1;

 if($_POST["site8"] == NULL)
  $sites = 1;

 if($_POST["site9"] == NULL)
  $sites = 1;

 if($_POST["site10"] == NULL)
  $sites = 1;

}


 $sql = "Insert into survey(province,store,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10)
values  ('$province','$store','$sites1','$sites2','$sites3','$sites4','$sites5','$sites6','$sites7','$sites8','$sites9','$sites10')";

echo $province,$store,$sites1,$sites3;
echo"<br/>";
if(mysqli_query($conn, $sql)){
 echo "Records added successfully.";
} else{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>