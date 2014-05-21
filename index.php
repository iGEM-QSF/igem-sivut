<!DOCTYPE html>
<?php
	require('functions.php');
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

        <title>Aalto-Helsinki iGEM</title>

        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Custom styles for this template -->
    </head>
    <body>
    <header>
        <div class= "navbar navbar-default navbar-fixed-top">
            <div class="text-center" id="navigation">
                <nav><?php show_menu(); ?></nav>
            </div>
            <div class="row text-center" id="logobar">
                <div class="col-sm-3">
                    <img src="aalto-white.png" id="logo">
                </div>
                <div class="col-sm-6">
                    <h1>Aalto-Helsinki</h1>
                </div>
                <div class="col-sm-3">
                    <img src="helsinki-white.png" id="logo">
                </div>
            </div>
        </div>
    </header>
<?php show_page(); ?>
    <footer>
        <div id="sponsors" class="text-center">
            <h2>Yhteistyössä</h2>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-2">
                    <a href="http://www.aalto.fi/"><img src="aalto.png" id="logo"></a>
                </div>
                <div class="col-sm-2">
                    <a href="http://www.helsinki.fi/yliopisto/"> <img src="helsinki.png" id="logo"></a>
                </div>
                <div class="col-sm-2">
                    <a href="https://www.flowdock.com/"> <img src="flowdock.png" id="logo"></a>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        <div class="bottom">
            <div class="text-center" id="navigation">
                <nav><?php show_menu(); ?></nav>
            </div>
            <div class="text-center" id="copyright">
                <p>© Aalto-Helsinki 2014</p>
            </div>
        </div>
    </footer>
    </body>
</html>
