<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head profile="http://gmpg.org/xfn/11">   <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>   <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats --> <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" /> <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" /> <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" /> <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>   <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>   </head> <body>


  <div id="header">
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <nav>
            <ul class="nav navbar-nav">
              <li><a href="home.php">Home</a></li>
              <li><a href="périphérique.php" target="_blank">Périphériques</a></li>
              <li><a href="applications.php" target="_blank">Applications</a></li>
              <li><a href="nouvelle_tech.php" target="_blank">Nouvelles Tech</a></li>
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
        <h1><u>L'Actu de la Tech</u></h1>
      </article>
      <aside class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
          <div id="div_date">
            <script type="text/javascript">
            var maintenant=new Date();
            var jour=maintenant.getDate();
            var mois=maintenant.getMonth()+1;
            var an=maintenant.getFullYear();
            document.write("Nous sommes le ",jour,"/",mois,"/",an,".");
            </script>
          </div></br>
        <div id="div_horloge"></div>
      </aside>
    </section>
  </div>


<!--end logo-->

<!--Article 1-->
 <section class="container-fluid article">
   <div class="container">
     <div class="row">
       <hr class="separator">
        <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
          <a href="#"><u>Périphériques</u></a>
          <p>Posté le <?php the_time('d/m/Y') ?></p>
          <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/ordinateur.jpg" alt="ordinateur_portable" id="ordinateur" onmouseover="affi_alt()"/>
          <p id="demo"></p>
        </article>


        <article class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
          <h2>Après Microsoft, Apple, Xiaomi met à jour sa gamme d’ordinateurs Mi Notebook Air</h2>
          <p>
            Microsoft a récemment publié ses nouveaux ordinateurs Surface Pro et Surface Laptop avec du matériel de dernière génération, et maintenant d’autres fabricants modernisent leurs appareils avec de nouvelles puces, davantage de mémoire vive (RAM)...
          </p>
          <button class="btn btn-custom">Lire la suite</button>
        </article>
        <aside id="info" class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
          <h3>Les articles les plus consultés ce mois-ci :</h3>
          <ul>
            <li><a href="#">Les bonnes raisons d'acheter le Playstation VR</a></li>
            <li><a href="#">Les meilleurs applications Androïd</a></li>
            <li><a href="#">Apple<a></li>
          </ul>
        </aside>
     </div>
   </div>
 </section>



 <!--article 2-->
 <section class="container-fluid article">
   <div class="container">
     <div class="row">
       <hr class="separator">
        <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
          <a href="#"><u>Périphériques</u></a>
          <p>Posté le <?php the_time('d/m/Y') ?></p>
          <h2>Le HTC U11 échoue son test de durabilité avec un écran fissuré</h2>
          <p>
            Le HTC U11 a été officiellement annoncé au mois de mai, et l’appareil apporte beaucoup d’améliorations et de fonctionnalités à sa gamme de smartphones. Mais s’il excelle, le HTC U11 a récemment été soumis...
          </p>
            <button class="btn btn-custom">Lire la suite</button>
        </article>
        <article class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
          <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/smartphone.jpg" alt="smartphone" id="smartphone">
        </article>
        <aside class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
          <div class="tab">
            <button id="bouton_f" class="tablinks" onclick="openRs(event,'Facebook')">Facebook</button></br>
            <button id="bouton_t" class="tablinks" onclick="openRs(event,'Twitter')">Twitter</button></br>
            <button id="bouton_l" class="tablinks" onclick="openRs(event,'Linkedin')">LinkedIn</button>
          </div>

          <div id="Facebook" class="tabcontent">
            <h3>Facebook</h3>
            <p>Mai 2017 : 1,9 milliards d'utilisateurs actifs.</p>
          </div>

          <div id="Twitter" class="tabcontent">
            <h3>Twitter</h3>
            <p>Janvier 2017 : 328 millions d'utilisateurs actifs.</p>
          </div>

          <div id="Linkedin" class="tabcontent">
            <h3>LinkedIn</h3>
            <p>Avril 2017 : 100 millions d'utilisateurs actifs.</p>
          </div>
        </aside>
      </div>
    </div>
  </section>

  <!-- article 3 et 4 -->
  <section class="container-fluid article">
    <div class="container">
      <div class="row">
        <hr class="separator">
         <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
           <a href="#"><u>Nouvelles Tech</u></a>
           <p>Posté le <?php the_time('d/m/Y') ?></p>
           <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/VR.jpg" alt="vr" id="vr">
           <h2>E3 2017 : Sony révèle de bonnes raisons d’acheter le PlayStation VR</h2>
           <p>
             La conférence lors de l’E3 2017 de Sony vient près de 8 mois après la sortie de son casque de réalité virtuelle (VR), le PlayStation VR. Cet évènement mondial dédié à tous les gamers...
           </p>
             <button class="btn btn-custom">Lire la suite</button>
         </article>
         <article class="col-md-5 col-lg-5 col-xs-12 col-sm-12">
          <a href="#"><u>Applications</u></a>
          <p>Posté le <?php the_time('d/m/Y') ?></p>
           <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/appli.jpg" alt="appli" id="appli" class="img-responsive center-block">
           <h2>Le programme Android Excellence met en exergue les meilleures apps Android</h2>
           <p>
             Google recherche de nouvelles façons de promouvoir et d’afficher des applications et des jeux qui offrent une expérience Android de haute qualité. Et, à cette fin, la société a lancé Android Excellence, un nouveau programme...
           </p>
            <button class="btn btn-custom">Lire la suite</button>
         </article>
       </div>
     </div>
   </section>

 <!--footer-->
 <footer class="container-fluid footer">
   <div class="container">
     <h1 class="col-md-6 col-lg-6 col-xs-6 col-sm-6">L'Actu de la Tech</h1>
  <div class="col-md-6 col-lg-6 col-xs-6 col-sm-6">
     <h3>Contact :</h3>
     <p>lactudelatech@gmail.com</p></br>
     <p>5 boulevard de la liberté</p></br>
     <p>59000 Lille</p>
  </div>
</div>
</footer>
