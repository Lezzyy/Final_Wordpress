<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HOME</title>

  <!--font-->
   <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">

  <!--css-->
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="Boilerplate/css/style.css">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

  </head>

  <!--contenu du site-->
  <body>

<!--header-->

<div id="header">
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <nav>
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="périphérique.html" target="_blank">Périphériques</a></li>
              <li><a href="applications.html" target="_blank">Applications</a></li>
              <li><a href="nouvelle_tech.html" target="_blank">Nouvelles Tech</a></li>
              <li><a href="contact.php" target="_blank">Contact</a></li>
              <li><a id="chrono"></a></li>
            </ul>
          </nav>
      </div>
  </nav>

<!--end header-->

<!--logo-->
<section class="container-fluid logo">
  <div class="container">
    <div class="row">
      <article class="col-md-9 col-lg-9 col-xs-12 col-sm-12">
        <h1><u>L'Actu de la Tech <?php bloginfo('name'); ?></u></h1>
      </article>
      <?php get_sidebar_date(); ?>
      <?php get_sidebar_horloge(); ?>
    </section>
</div>


<!--end logo-->
