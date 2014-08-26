<style type="text/css">

@font-face {
	font-family: "TitilliumWeb";
    	src: url(http://www.aaltohelsinki.com/css/fonts/TitilliumWeb-Regular.ttf) format("truetype");
}

header {
	font-size: 14px;
	line-height: 1.42857143;
	color:white;
	margin-bottom: 100px;
	font-family:"TitilliumWeb";
}

header a {
	color: white;
	padding-right: 1.5vw;
    	padding-left: 1.5vw;
	font-size: 1.5em;
	text-decoration: none !important;
	font-family:"TitilliumWeb";
}

header a:hover {
	text-decoration: none !important;
}


header h1{
	font-size: 1.35em;
	padding-right: 0;
	padding-left: 1.5vw;
	font-family:"TitilliumWeb";
}

header #logo {
	margin-top: 1.5em;
	padding-left:1em;
	height: 1.5em;
	margin-right:0.2em;

}

header #lang {
    	margin-top: 3em;
    	font-size: 0.6em;
}

header .navbar {
	background-color:rgba(0,0,0,0.7);
	border:0px;
	border-radius: 0px;
}

#navigation {
	margin-top: 2.5em;
}

</style>

<?php
/**
 * Header file for subtle theme. All the stylesheets
 * are included not from here, but from functions.php file.
 *
 * @package WordPress
 * @subpackage Subtle
 * @since Subtle 1.0
 */ 
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" type="image/png" href="http://www.aaltohelsinki.com/img/favicon.png" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	
	<header>
            <div class= "navbar navbar-default">
                <div class="row text-center" id="logobar">
                    <div class="col-sm-3">
                        <a href="http://www.aaltohelsinki.com/index.html"><img src="http://www.aaltohelsinki.com/img/transp-small-white-withtext.png" id="ahlogo" class="img-responsive"></a>
                    </div>
                    <div class="text-center col-sm-6" id="navigation">
                        <nav>
                            <a href="http://www.aaltohelsinki.com/project.html">Projekti</a>
                            <a href="http://www.aaltohelsinki.com/team.html">Joukkue</a>
                            <a href="http://www.aaltohelsinki.com/partners.html">Partnerit</a>
                            <a href="http://www.aaltohelsinki.com/blog">Blogi</a>
                        </nav>
                    </div>
                    <div class="col-sm-3" id="lang">
                        <h1></h1>
                        </div>
                    </div>
                </div>
    </header>

	<!-- MAIN CONTENT
		========================================================================== -->
	<div class="container content-wrapper"> 
		<div class="row content-holder">

			