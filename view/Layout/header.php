<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="/assets/css/default.css">
	<link rel="stylesheet" href="/assets/css/layout.css">
   <link rel="stylesheet" href="/assets/css/media-queries.css">
   <link rel="stylesheet" href="/assets/css/magnific-popup.css">

   <!-- Script
   ================================================== -->
	<script src="/assets/js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="/assets/favicon.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">
         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
			<!--<li class="pull-left" style="margin-left:150px;"><img src="/assets/images/logo.png" alt="logo csi" height="48" width="48"/></li>-->
            <li class="current"><a href="/">Home</a></li>
            <li><a href="/about">À propos de CSI</a></li>
            <li><a href="/events">Événements</a></li>
            <li><a href="http://www.youp0wn.com/">YouP0WN</a></li>
            <li><a href="/contact">Contact</a></li>
			<li><a href="/login">Espace Membre</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->
	<?php 
		global $path;
		if ($path == "/") {
	?>
      <div class="row banner" style="margin-top:50px;">
         <div class="banner-text">
            <h1 class="responsive-headline">Club de Sécurité Informatique.</h1>
            <h3>Le club sécurité informatique de l’ENSI est né suite à des discussions récurrentes qui se déroulaient entre des étudiants autour de l’importance de la sécurité et de l’omniprésence de risques potentiels dans un monde de plus en plus connecté.</h3>
            <hr />
            <ul class="social">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
         </div>
      </div>
	  <?php
	   }
	  ?>
   </header> <!-- Header End -->

