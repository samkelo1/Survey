<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("$storesurvey", $con);


 $sql = "Insert into survey(province,store,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,surveydate)
values  ('$_POST[ddl]','$_POST[dl2]',$_POST[sites1]''$_POST[sites2]','$_POST[sites3]','$_POST[sites4]','$_POST[sites5]','$_POST[sites6]','$_POST[sites7]','$_POST[sites8]','$_POST[sites9]''$_POST[sites10]','$_POST[surveydate]')";
if($_POST['submit'])
{
echo "****Thank you****";
mysql_query($sql);
//this is killing my brain
}
?>