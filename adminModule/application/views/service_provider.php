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

    <title>Servoce Providers</title>

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
                <li class="active" class="dropdown">
                  <a href="<?php echo base_url(); ?>service_provider" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service Provider <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>service_provider#academ">Academics</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>service_provider#lang">Languages</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>service_provider#ins">Instruments</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>service_provider#cook">Cooking or Baking</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo base_url(); ?>register">Register</a></li>
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
        <div class="item">
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
        <div class="item active">
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

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
<hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Nathan Calimlim<span class="text-muted">.</span></h2>
          <h1>Math Teacher</h1>
          <p class="lead">Educating the mind without educating the heart is no education at all.
                          </p>
          <p><a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>login" role="button">Hire</a></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="<?php echo base_url(); ?>asset/holder.js/500x500/auto" alt="500x500" src="<?php echo base_url(); ?>asset/images/nathan1.jpg"
        </div>
      </div>




      <hr class="featurette-divider">



      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Rommel Arciosa<span class="text-muted">.</span></h2>
          <h1>Nihongo Tutor</h1>
          <p class="lead"> Your work is going to fill large part of your life, and the only way to be truly satisfied is to do what you believe is great work.
          And the only way to do great work is to love what you do. IF you haven't found it yet, keep looking.Don't settle. As with all maters of the heartm you'll know when you find it. And,like any great relationship,It just gets better and better as the years roll on. SO KEEP LOOKING UNTIL YOU FIND IT. DON'T SETTLE.
                          </p>
        <p><a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>login" role="button">Hire</a></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="<?php echo base_url(); ?>asset/holder.js/500x500/auto" alt="500x500" src="<?php echo base_url(); ?>asset/images/mel1.jpg"
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Paul Ian Quezada<span class="text-muted">.</span></h2>
          <h1>Piano Instructor</h1>
          <p class="lead">You laugh, You cry, and You work Harder than you thought you could. Somedays you're trying and somedays you're just trying to make 
          it through the day. Your wallet is empty, Your heart is empty, your mind is packed with memories of kids who have change your life.
                          </p> 
          <p><a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>login" role="button">Hire</a></p> 
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="<?php echo base_url(); ?>asset/holder.js/500x500/auto" alt="500x500" src="<?php echo base_url(); ?>asset/images/ian2.jpg"
        </div>
      </div>

      <hr class="featurette-divider">
     <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Aver Maslian<span class="text-muted">.</span></h2>
          <h1>Chef mentor</h1>
          <p class="lead">It is my job to help all my student belong... This mean part my job is to educate the wider community about the needs of a child
            who may be preceived as 'different' to help them become embraced as part of the community.</p>
          <p><a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>login" role="button">Hire</a></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="<?php echo base_url(); ?>asset/holder.js/500x500/auto" alt="500x500" src="<?php echo base_url(); ?>asset/images/avery.jpg"
        </div>
      </div>
 <hr class="featurette-divider">s
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Group 3, Webtek Lab. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


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
