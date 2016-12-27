<!--?php
include 'mysql_complain.php';
?-->



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Raleway|Rubik" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>






<div class="container" style="font-family: 'Raleway', sans-serif;">
  <h1><b>File Your Complaint</b></h1><br>


<form role="form" action="mysql_complain.php" method="post">


<!--  <form action="mysql_complain.php" method="POST">-->
    <div class="form-group" style="background-color: #ff6600; box-shadow: 5px 5px 5px rgba(1, 1, 1, 0.5); height: 50px; color: white;"><h2 align="center">Victim's Info</h2>
</div>
<div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" placeholder="Full name"	required name="name" >
    </div><br>
	
	<div class="form-group">

	<label for="gnd" >Gender:&nbsp;&nbsp;</label>
	
    <label class="radio-inline">
      <input type="radio" name="gender"   value="M" required>Male
    </label>
    <label class="radio-inline">
      <input type="radio"  name="gender"  value="F">Female
    </label>
	 <label class="radio-inline">
      <input type="radio"  name="gender" value="O">Other
    </label>	
</div><br>

<div class="form-group">
      <label for="agel">Age:</label><input class="form-control" type="number" min="1" max="110" step="1" value="18" name="age">     
    </div><br>




<div class="form-group" >
      <label for="tel">Contact no.:</label>
      <input type="tel" class="form-control" maxlength="10" placeholder="Active contact no." name="tel" required data-validation-requires-message="Incorrect no." pattern="[0-9]{10}">
      <p class="help-block text-danger" id="phone_msg"></p>
    </div><br><br>

    <div class="form-group" style="background-color: #ff6600; box-shadow: 5px 5px 5px rgba(1, 1, 1, 0.5); height: 50px; color: white;"><h2 align="center">Crime's Info</h2>
    </div>

<div class="form-group">
  <label for="compType" >Complaint Type:</label>
  
    <label class="radio">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="c_type" value="Eve Teasing" required>Eve Teasing
    </label>
    <label class="radio">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="c_type" value="Theft">Theft
    </label>
   <label class="radio">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="c_type"  value="Troublesome Neighbour">Troublesome Neighbour
    </label> 
   <label class="radio">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="c_type" value="Stray Animals">Stray Animals
    </label>  
     <label class="radio">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="c_type" value="Automobile Annoyance">Automobile Annoyance
    </label> 
     <label class="radio">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="c_type" value="Others">Others
    </label> 
</div><br>


 <label for="place">Date and Time:</label>
<div class="input-group">
  <span class="input-group-addon">Date</span>
  <input id="date" class="form-control" name="datee" min="2016-01-01" max="2016-12-31" type="date">
</div>
<div class="input-group">
 <span class="input-group-addon">Time</span>
 <input id="time" name="timee" class="form-control" type="time">
</div>
<br><br>

<div class="form-group">
  <label for="place">Place:</label>
  <textarea class="form-control" rows="3" maxlength="60" id="place" placeholder="Specify place in brief" required name="place"></textarea>
</div><br>

<div class="form-group">
  <label for="desc">Description:</label>
  <textarea class="form-control" rows="5" maxlength="200" id="desc" placeholder="Describe incident in brief" required name="descc"></textarea>
</div>
<center><button type="submit" class="btn btn-default" style="background-color: #ff6600; color: white;">Submit</button></center>
<!--</form>-->
</div><br><br>

</form>
	
    
  

</body>
</html>
