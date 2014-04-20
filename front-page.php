<?php
/*
Template Name: Cover Page
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>iGEM Aalto-Helsinki</title>

    <!-- Bootstrap core CSS -->
    <link href="wp-content/themes/flat-bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="wp-content/themes/flat-bootstrap/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
<!--
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
-->

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <div class= "team-pic-container"><div class= "team-pic"><img src="http://www.aaltohelsinki.com/wp-content/uploads/2014/03/cropped-tiimi1.jpg"></div></div>
          <div class="container">
            <div class="carousel-caption">
              <h1>Joukkue</h1>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class= "team-pic-container"><div class= "team-pic"><img src="http://www.aaltohelsinki.com/wp-content/uploads/2014/03/a-header-treelights.jpg"></div></div>
      <!--<div class="placeholder"></div>
          <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text: " alt="Second slide">-->
          <div class="container">
            <div class="carousel-caption">
              <h1>Idea</h1>
              <p>Miltpä kuulostaisi biologinen ilmanraikkausmittari tai kestoparfyymi ihollasi? Entäpä kauko-ohjattavat solut? Seuraa, kuinka teemme ideoistamme totta!</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Lue lisää</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class= "team-pic-container"><div class= "team-pic"><img src="http://www.aaltohelsinki.com/wp-content/uploads/2014/03/a-header-grass.jpg"></div></div>
      <!--<div class="placeholder"></div>
          <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text: " alt="Third slide">-->
          <div class="container">
            <div class="carousel-caption">
              <h1>Sponsoroi</h1>
              <p>Auta meitä saavuttamaan tavoitteemme sponsoroimalla, niin me huolehdimme näkyvyydestänne missä ikinä tiimimme liikkuukaan.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Tue meitä</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

    <div class="logo-wrapper">
    <img class="logo aalto" src="wp-content/uploads/2014/03/aalto.png">
    <img class="logo helsinki" src="wp-content/uploads/2014/03/helsinki.png">
    <h1><b>Aalto-Helsinki</b></h1>
    </div>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
     <div class="team">
    <div class="row">
        <div class="col-lg-4">
          <img src="http://www.aaltohelsinki.com/wp-content/uploads/2014/04/Oskari_140.png" alt="Oskari">
          <h2>Oskari Vinko</h2>
          <p>Systeemitieteet, laskennallinen ja kognitiivinen biotiede, molekyylibiotieteet.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="http://www.aaltohelsinki.com/wp-content/uploads/2014/04/Laura_140.png" alt="Laura" id="laurakuva">
          <h2>Laura Laakso</h2>
          <p>Molekyylibiotieteet, bioinformatiikka ja design.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="http://www.aaltohelsinki.com/wp-content/uploads/2014/04/Lassi_140.png" alt="Lassi" id="lassikuva">
          <h2>Lassi Vapaakallio</h2>
      <p>Bioinformatiikka, biotekniikka, web-kehitys.</p>
          <!--<p>Toisen vuoden tietojänkäsittelytieteen opiskelija, joka on ehtinyt opiskelemaan myös kaksi vuotta biotekniikkaa. Erityisesti kiinnostunut bioinformatiikasta ja apuvälineiden ohjelmoinnista joukkueelle, mutta tarvittavat taidot mikropipetin käyttöön löytyvät myös.</p>-->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

<div class="row">
        <div class="col-lg-4">
          <img src="http://www.aaltohelsinki.com/wp-content/uploads/2014/04/Pietu_140.png" alt="Pietu" id="pietukuva">
          <h2>Pietu Roisko</h2>
          <p>Tuotekehitys, bioniikka ja taloudenhoito.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="http://www.aaltohelsinki.com/wp-content/uploads/2014/04/Niklas_140.png" alt="Niklas">
          <h2>Niklas Itänen</h2>
          <p>Brainstorming manager. Teoreettinen fysiikka ja biomatematiikka.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="http://www.aaltohelsinki.com/wp-content/uploads/2014/04/Martina_140.png" alt="Martina">
          <h2>Martina Ikonen</h2>
          <p>Bio- ja elintarviketekniikka, Biobricks</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

<div class="row">
        <div class="col-lg-4">
          <img src="http://www.aaltohelsinki.com/wp-content/uploads/2014/04/Otto_140.png" alt="Otto" id="ottokuva">
          <h2>Otto Lamminpää</h2>
          <p>Kemia, teoreettinen fysiikka, biomatematiikka.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="http://www.aaltohelsinki.com/wp-content/uploads/2014/04/Minttu_140.png" alt="Minttu">
          <h2>Minttu Salmela</h2>
          <p>Travel manager. Bio- ja elintarviketekniikka, kemia.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="http://www.aaltohelsinki.com/wp-content/uploads/2014/04/Mikko_140.png" alt="Mikko" id="mikkokuva">
          <h2>Mikko Laine</h2>
          <p>Bio- ja elintarviketekniikka, bioprosessitekniikka, tuotantotalous.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div><!-- /.team -->


      <!-- START THE FEATURETTES -->

      <!--<hr class="featurette-divider">-->
      <div class="row2">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Olemme ensimmäinen iGEM-joukkue Suomessa. <span class="text-muted"></span></h2>
          <p class="lead">Teemme historiaa ja luomme opiskelijoille uusia tutkimus- ja kansainvälistymismahdollisuuksia.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="http://www.aaltohelsinki.com/wp-content/uploads/2014/03/pinkwater-500.jpg" alt="Generic placeholder image">
        </div>
      </div>
      </div>

      <!--<hr class="featurette-divider">-->

      <div class="row3">
      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="http://www.aaltohelsinki.com/wp-content/uploads/2014/03/space-500.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Opiskelijalähtöistä monitieteellistä tutkimusta. <span class="text-muted"></span></h2>
          <p class="lead">Seuraa blogiamme ja pysy kärryillä siitä, mitä kaikkea kesän aikana saamme aikaan.</p>
        </div>
      </div>
      </div>

      <!--<hr class="featurette-divider">-->
      <div class="row4">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Sponsoroi meitä. <span class="text-muted"></span></h2>
          <p class="lead">Sponsorina olet avainasemassa projektimme onnistumisen kannalta. Me huolehdimme näkyvyydestänne julkaisuissamme, nettisivuillamme, joukkueasussa yms. Tämä on myös ainutlaatuinen tilaisuus tutustua bioalan tulevaisuuden huippuosaajiin!</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="http://www.aaltohelsinki.com/wp-content/uploads/2014/03/grass-500.jpg" alt="Generic placeholder image">

        </div>
      </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
    <p><b>Special thanks to:</b><br/><br/> Markus Linder, Aalto University &middot; Flowdock <br/><br/></p>
        <p><a href="#">Sivun alkuun</a></p>
        <p>&copy; 2014 &middot; Aalto-Helsinki</p>
      </footer>

    </div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="wp-content/themes/flat-bootstrap/bootstrap/js/bootstrap.min.js"></script>
    <script src="wp-content/themes/flat-bootstrap/bootstrap/js/docs.min.js"></script>
  </body>
</html>