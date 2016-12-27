<?php

ob_start();
error_reporting(0);

$connect=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("ECops") or die(mysql_error()); 

//properties of the uploaded file
$fname= $_FILES["resume"]["name"];
$type= $_FILES["resume"]["type"];
$size= $_FILES["resume"]["size"];
$temp= $_FILES["resume"]["tmp_name"];
$error= $_FILES["resume"]["error"];

if ($error > 0)
	die("Error uploading file! code $error.");
else
   {
	if($type!="application/pdf")//condition for the file
	{
	die("Format  not allowed !");
	}
	else
	{

	 move_uploaded_file($temp, "StoreRsm/".$fname);
	 header( "Location: http://localhost/mysql/Website/form_apply_main.php" );

	 //echo "Upload complete!<br>File at: ".$temp;


	 }
}

$name=$_POST["name"];
$gen=$_POST["gender"];
$age=$_POST["age"];
$cont=$_POST["tel"];
$mail=$_POST["mail"];
$state=$_POST["state"];
$city=$_POST["city"];
$pin=$_POST["pin"];
$addr=$_POST["addr"];
$qual=$_POST["qual"];
$exp=$_POST["exp"];
$why=$_POST["why"];


$write=mysql_query("INSERT INTO apply VALUES ('','$name','$gen','$age','$cont','$mail','$state','$city','$pin','$addr','$qual','$exp','$fname','$why') ");


?>