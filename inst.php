<html>

<body>





<?php

//$con = mysql_connect("mysql.cis.ksu.edu","cis_id","password");
$con = mysql_connect("localhost","root","");

if (!$con)

{

    die('Could not connect: ' . mysql_error());

}



mysql_select_db("$storesurvey", $con);



$sql="INSERT INTO info (fname, lname)

VALUES

('$_POST[fname]','$_POST[lname]')";



if (!mysql_query($sql,$con))

{

    die('Error: ' . mysql_error());

}

echo "1 record added";



mysql_close($con)

?>

</body>

</html>