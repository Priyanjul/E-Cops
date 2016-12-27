<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map
</title>
<link rel="stylesheet" type="text/css" href="style.css" />
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="tiles_style.css" />
   <link href="https://fonts.googleapis.com/css?family=Raleway|Rubik" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- CSS -->
       <!-- <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>-->
        <!-- 
        <link rel="stylesheet" href="assets/prettyPhoto/css/prettyPhoto.css">
        <link rel="stylesheet" href="assets/css/social-icons.css">-->
        <link rel="stylesheet" href="assets/css/ebook-style.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<style type="text/css">
  #tabs{
    width: 250px;
    height: 350px;
  }
</style>


  </head>
  <body>


 <!-- HEADER -->
        <div class="container-fluid" style="background-color: black;">
            <div class="header row">
              <div class="logo span4">
                    <h1 style=" font-family: 'Press Start 2P', cursive;"> E-Cops </h1>
                </div>
                <div class="tel-skype span8">
                    <p><i class="icon-phone-sign" style="font-family: 'Raleway', sans-serif;"></i> Phone: 9876543210 <span class="pipe">|</span> <i class="icon-user"></i> Gmail: priyanjul@acm.org</p>
                </div>
            </div>
        </div>
<!-- CAROUSAL -->
        <iframe name="Stack" src="carousal.html" width="100%" height="600px" 
        frameborder="0" scrolling="no" id="iframe">
</iframe>

<!-- TILES -->
  <div class="container-fluid" style="margin-top: 80px">
  <div class="row">
  <div class="col-md-2 col-md-offset-2" id="tabs" >
    <div class="hovereffect">
        <img  src="images/locate.jpg" alt="">
            <div class="overlay">
        <p> 
          <h1><a href="maps1.html" target="_blank" style="color: white; font-family: 'Raleway', sans-serif;">LOCATE YOURSELF</a></h1>
        </p> 
            </div>
    </div>
</div>
  <div class="col-md-2 col-md-offset-1" id="tabs">
    <div class="hovereffect">
        <img class="img-responsive" src="images/file.jpg" alt="">
            <div class="overlay">
        <p> 
          <h1><a href="form_file_display.php" target="_blank" style="color: white; font-family: 'Raleway', sans-serif;">FILE A COMPLAINT</a></h1>
        </p> 
            </div>
    </div>
</div>
  <div class="col-md-2 col-md-offset-1" id="tabs">
    <div class="hovereffect">
        <img class="img-responsive" src="images/ask.jpg" alt="">
            <div class="overlay">
        <p> 
          <h1><a href="form_ask_display.php" target="_blank" style="color: white; font-family: 'Raleway', sans-serif;">ASK US SOMETHING</a></h1>
        </p> 
            </div>
    </div>
</div>
</div>
  <br><br>
  <div class="row">
  <div class="col-md-2 col-md-offset-2" id="tabs" >
    <div class="hovereffect">
        <img class="img-responsive" src="images/apply.jpg" alt="">
            <div class="overlay">
        <p> 
          <h1><a href="#" style="color: white; font-family: 'Raleway', sans-serif;">APPLY FOR SOMETHING</a></h1>
        </p> 
            </div>
    </div>
</div>
  <div class="col-md-2 col-md-offset-1" id="tabs">
    <div class="hovereffect">
        <img class="img-responsive" src="images/about.jpg" alt="">
            <div class="overlay">
        <p> 
          <h1><a href="#" style="color: white; font-family: 'Raleway', sans-serif;">ABOUT E-COPS</a></h1>
        </p> 
            </div>
    </div>
</div>
  <div class="col-md-2 col-md-offset-1" id="tabs">
    <div class="hovereffect">
        <img class="img-responsive" src="images/admin.jpg" alt="">
            <div class="overlay">
        <p> 
          <h1><a href="#" style="color: white; font-family: 'Raleway', sans-serif;">ADMINISTRATOR</a></h1>
        </p> 
            </div>
    </div>
</div>
</div>
  </div>
<!--Footer-->
 <div>
<br>
<br>
        <center> <iframe name="Complaint" src="footer.html" width="100%"  height="80px" style="box-shadow: 5px 5px 5px rgba(1, 1, 1, 0.5);" 
        frameborder="0" scrolling="yes" id="iframe"></iframe></div>
</iframe></center>
  </body>
</html>