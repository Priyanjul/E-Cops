<!--?php
include 'mysql_ask.php';
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
  <h1><b>Ask Us Something</b></h1><br>
  <form action="mysql_ask.php" method="post">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" placeholder="Full name" name="name" required>
    </div><br>

     <div class="form-group">
      <label for="email">E-mail ID:</label>
      <input type="email" class="form-control" placeholder="Email-id" name="email" required>
    </div><br>

    <div class="form-group">
      <label for="tel">Contact no.:</label>
      <input type="tel" class="form-control" maxlength="10" placeholder="Active contact no." name="cont" required required data-validation-requires-message="Incorrect no." pattern="[0-9]{10}">
      <p class="help-block text-danger" id="phone_msg"></p>
    </div><br>

    <div class="form-group">
  <label for="query">Your Query:</label>
  <textarea class="form-control" rows="5" maxlength="400" name="quer" placeholder="Write your query - Try to be precise - Ask question without providing unrequired data" required></textarea>
</div><br>
<center><button type="submit" class="btn btn-default" style="background-color: #ff6600; color: white;">Submit</button></center>
</form>
</div><br><br>

</body>
</html>