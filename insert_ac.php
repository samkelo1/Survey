<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password
$db_name="store"; // Database name 
$tbl_name="test_mysql"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$name=$_POST['name'];
$case=$_POST['case'];
$email=$_POST['email'];

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(name, case, email)VALUES('$name', '$case', '$email')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
    echo "Successful";
    echo "<BR>";
    echo "<a href='insert.php'>Back to main page</a>";
}

else {
    echo "ERROR";
}
?>

<?php
// close connection 
mysql_close();
?>