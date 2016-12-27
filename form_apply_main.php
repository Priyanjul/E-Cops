<!--?php
include 'mysql_apply.php';
?-->


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Apply for something</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Raleway|Rubik" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container" style="font-family: 'Raleway', sans-serif;">
  <h1><b>Apply for Anything</b></h1><br>
  <form action="mysql_apply.php" method="post" enctype="multipart/form-data">
    <div class="form-group" style="background-color: #ff6600; box-shadow: 5px 5px 5px rgba(1, 1, 1, 0.5); height: 50px; color: white;"><h2 align="center">Personal Details</h2>
</div>
<div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" placeholder="name"	name="name" required>
    </div><br>

    <div class="form-group">
    <label for="gnd" >Gender:&nbsp;&nbsp;</label>
  
      <label class="radio-inline">
       <input type="radio" name="gender" value="M" required>Male
      </label>
    <label class="radio-inline">
      <input type="radio"  name="gender" value="F">Female
    </label>
     <label class="radio-inline">
      <input type="radio"  name="gender" value="O">Other
    </label>  
  </div><br>

      <div class="form-group">
        <label for="agel">Age:</label><input class="form-control" type="number" min="18" max="50" step="1" value="18" name="age">
      </div><br>
	<div class="form-group">
      <label for="tel">Contact no.:</label>
      <input type="tel" class="form-control" maxlength="10" placeholder="Active contact no." name="tel" required data-validation-requires-message="Incorrect no." pattern="[0-9]{10}">
      <p class="help-block text-danger" id="phone_msg"></p>
    </div><br>
    <div class="form-group">
      <label for="usr">Email:</label>
      <input type="mail" class="form-control" placeholder="Email Address" name="mail" required><br><br>
      </div>

	
    <div class="form-group" style="background-color: #ff6600; box-shadow: 5px 5px 5px rgba(1, 1, 1, 0.5); height: 50px; color: white;"><h2 align="center">Applicant's Basic Details</h2>
    </div>
    <br>

    <div class="form-group">
  <label for="state">Select State</label>
  <select class="form-control" id="dist" name="state" required>
    <option disabled selected value required>Choose your state</option>
    <option>Andhra Pradesh</option>
    <option>Arunachal Pradesh</option>
    <option>Assam</option>
    <option>Bihar</option>
    <option>Chhattisgarh</option>
    <option>Goa</option>
    <option>Gujarat</option>
    <option>Haryana</option>
    <option>Himachal Pradesh</option>
    <option>Jammu & Kashmir</option>
    <option>Jharkhand</option>
    <option>Karnataka</option>
    <option>Kerala</option>
    <option>Madhya Pradesh</option>
    <option>Maharashtra</option>
    <option>Manipur</option>
    <option>Meghalaya</option>
    <option>Mizoram</option>
    <option>Nagaland</option>
    <option>Odisha (Orissa)</option>
    <option>Punjab</option>
    <option>Rajasthan</option>
    <option>Sikkim</option>
    <option>Tamil Nadu</option>
    <option>Telangana</option>
    <option>Tripura</option>
    <option>Uttar Pradesh</option>
    <option>Uttarakhand</option>
    <option>West Bengal</option>
    <option>Andaman and Nicobar Islands</option>
    <option>Delhi</option>
    
  </select>
</div>
      <div class="form-group">
      <label for="city">City</label>
      <input type="text" class="form-control" placeholder="City" name="city" required >
    </div><br>

    <div class="form-group">
      <label for="Pin">Pin</label>
      <input type="pin" class="form-control" maxlength="6" placeholder="Pin Code" name="pin" required data-validation-requires-message="Incorrect no." pattern="[0-9]{6}">
      <p class="help-block text-danger" id="pin_msg"></p>
    </div><br>

<div class="form-group">
  <label for="place">Address</label>
  <textarea class="form-control" rows="5" maxlength="500" id="address" placeholder="Enter street no. & locality" name="addr" required></textarea>
</div><br>

<div class="form-group">
  <label for="compType" >Qualifications</label>
  
    <label class="checkbox">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  name="qual" value="Merit">Merit
    </label>
    <label class="checkbox">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  name="qual" value="Secondary">Secondary 
    </label>
   <label class="checkbox">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  name="qual" value="Graduated">Graduated
    </label> 
   <label class="checkbox">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  name="qual" value="Post Graduated">Post Graduated
    </label>  
     <label class="checkbox">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  name="qual" value="Doctorate">Doctorate
    </label> 
     <label class="checkbox">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  name="qual" value="Diploma">Diploma
    </label> 
</div><br>

<div class="form-group">
<label for="gnd" >Field of Expertise:&nbsp;&nbsp;</label>
  
      <label class="radio-inline">
       <input type="radio" name="exp" value="Web Developer" required>Web Developer
      </label>
    <label class="radio-inline">
      <input type="radio"  name="exp" value="Data Analyst">Data Analyst
    </label>
     <label class="radio-inline">
      <input type="radio"  name="exp" value="Hotline Personnel">Hotline Personnel
    </label>  
     <label class="radio-inline">
      <input type="radio"  name="exp" value="Networking">Networking
    </label>  
  </div><br>

<div class="form-group">
  <label for="resume">Resume</label>
  <input type="file" name="resume" class="form-control" required><br><br>
</div>

<div class="form-group">
  <label for="why">Why we should hire you</label>
  <textarea class="form-control" rows="3" maxlength="100" id="about" placeholder="Something about yorself (max 100 words)" required name="why"></textarea>
</div><br>

<center><button type="submit" class="btn btn-default" style="background-color: #ff6600; color: white;">Submit</button></center>
</form>
</div><br><br>
	
    
  

</body>
</html> 
