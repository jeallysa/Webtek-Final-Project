<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url(); ?>asset/css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url(); ?>asset/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>asset/css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url(); ?>publichome">MyTutorial</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url(); ?>publichome">Home</a></li>
                <li><a href="<?php echo base_url(); ?>about">About</a></li>
                <li class="dropdown">
                  <a href="<?php echo base_url(); ?>service_provider" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service Provider <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>service_provider">Academics</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>service_provider">Languages</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>service_provider">Instruments</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>service_provider">Cooking or Baking</a></li>
                  </ul>
                </li>
                <li class="active"><a href="<?php echo base_url(); ?>register">Register</a></li>
                <li><a href="<?php echo base_url(); ?>login">LogIn</a></li>
                </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo base_url(); ?>asset/images/mathf.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>MATHEMATICUS</h1>
              <p>Mathematics may not teach us how to add LOVE or how to minus Hate. But It gives us every REASON to HOPE that every PROBLEM has a SOLUTION.</p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>register" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo base_url(); ?>asset/images/scienceq.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>SCIENTIA</h1>
              <p>SCIENCE is the key to our FUTURE and if you don't belive in SCIENCE, then you're holding EVERYBODY back.</p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>about" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo base_url(); ?>asset/images/Englishq.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>ANGLICUS</h1>
              <p>The MORE that you READ, the more THINGS you will KNOW. The MORE you LEARN the more PLACES you'll GO.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="col-lg-5 col-lg-offset-2">
        <h1>Register Now!</h1>
        <p>Fill in the details to register on our website!</p>
          
          <?php if(isset($_SESSION['success'])){ ?>
          <div class="alert alert-success"> <?php echo $_SESSION['success']; ?> </div>
            <?php
          } ?>
          <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
          
          <form action="" method="POST">
              <div class="form-group">
                  <label for="UserName">Username:</label>
                  <input class="form-control" name="UserName" id="UserName" type="text">
              </div>
              <div class="form-group">
                  <label for="FirstName">First Name:</label>
                  <input class="form-control" name="FirstName" id="FirstName" type="text">
              </div>
              <div class="form-group">
                  <label for="LastName">Last Name:</label>
                  <input class="form-control" name="LastName" id="LastName" type="text">
              </div>             
              <div class="form-group">
                  <label for="type">User Type:</label>
                  <select class="form-control" id="type" name="type">
                    <option value="customer">Customer</option>
                    <option value="sp">Service Provider</option>
                  </select>
              </div> 
              <hr>
              <div class="form-group">
                  <label for="ifSP">(If your a service provider, fill out the following:)</label>
              </div>            
              <div class="form-group">
                  <label for="Category">Category:</label>
                   <select class="form-control" id="Category" name="Category">
                      <option value="Academics">Academics</option>
                      <option value="Instruments">Musical Instruments</option>
                      <option value="Languages">Languages</option>
                      <option value="cb">Cooking/Baking</option>
                    </select>
              </div>
              <div class="form-group">
                  <label for="Service">Service Provided:</label>
                  <input class="form-control" name="Service" id="Service" type="Service">
              </div>
              <hr>
              <div class="form-group">
                  <label for="Birthdate">Birthdate:</label>
                  <input class="form-control" name="Birthdate" id="Birthdate" type="date">
              </div> 
              <div class="form-group">
                  <label for="Email">E-mail:</label>
                  <input class="form-control" name="Email" id="Email" type="email">
              </div>
              <div class="form-group">
                  <label for="ContactNumber">Contact:</label>
                  <input class="form-control" name="ContactNumber" id="ContactNumber" type="text">
              </div>
              <div class="form-group">
                  <label for="Address">Address:</label>
                  <input class="form-control" name="Address" id="Address" type="text">
              </div>
              <div class="form-group">
                  <label for="Password">Password:</label>
                  <input class="form-control" name="PasswordC" id="Password" type="password">
              </div>
              <div class="form-group">
                  <label for="Password">Confirm Password:</label>
                  <input class="form-control" name="Password" id="Password" type="password">
              </div>
              <div class="text-center">
                  <button class="btn btn-primary" name="register">Register</button>
              </div>
              <br>
              <div class="text-center">
                  <p name="login"><a href="<?php echo base_url(); ?>login">Login now</a></p>
              </div>
      </form>
      </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>asset/
    js/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo base_url(); ?>asset/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url(); ?>asset/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
