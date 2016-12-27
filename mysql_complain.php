<?php

ob_start();
error_reporting(0);

$connect=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("ECops") or die(mysql_error()); 
//echo "connected";

$name=$_POST["name"];
$gen=$_POST["gender"];
$age=$_POST["age"];
$cont=$_POST["tel"];
$type=$_POST["c_type"];
$dat=$_POST["datee"];
$tim=$_POST["timee"];
$place=$_POST["place"];
$desc=$_POST["descc"];
//$date=date("d-m-Y");

//$sql="INSERT INTO COMPLAINT (id,name,gender,age,tel,c_type,datee,timee,place,descc)"


$write=mysql_query("INSERT INTO complaint VALUES ('','$name','$gen','$age','$cont','$type','$dat','$tim','$place','$desc') ");
header( "Location: http://localhost/mysql/Website/form_apply_main.php" );

?>