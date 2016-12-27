<?php

ob_start();
error_reporting(0);

$connect=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("ECops") or die(mysql_error()); 
//echo "connected";

$name=$_POST["name"];
$mail=$_POST["email"];
$cont=$_POST["cont"];
$query=$_POST["quer"];
//$date=date("d-m-Y");

//$sql="INSERT INTO COMPLAINT (id,name,gender,age,tel,c_type,datee,timee,place,descc)"


$write=mysql_query("INSERT INTO ask VALUES ('','$name','$mail','$cont','$query') ");
header( "Location: http://localhost/mysql/Website/form_ask_main.php" );
?>