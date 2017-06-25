<?php get_header(); ?>
<!--Article 1-->
<div id="main">
<div id="content">
 <section class="container-fluid article">
   <div class="container">
     <div class="row">
       <hr class="separator">
        <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
          <a href="#"><u>Périphériques</u></a>
          <img src="img/ordinateur.jpg" alt="ordinateur_portable" id="ordinateur" onmouseover="affi_alt()"/>
          <p id="demo"></p>
        </article>


        <article class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
          <h2>Après Microsoft, Apple, Xiaomi met à jour sa gamme d’ordinateurs Mi Notebook Air</h2>
          <p>
            Microsoft a récemment publié ses nouveaux ordinateurs Surface Pro et Surface Laptop avec du matériel de dernière génération, et maintenant d’autres fabricants modernisent leurs appareils avec de nouvelles puces, davantage de mémoire vive (RAM)...
          </p>
          <button class="btn btn-custom">Lire la suite</button>
          <p>Posted on <?php the_time('F jS, Y') ?></p>
        </article>
        <?php get_sidebar(); ?>
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
          <h2>Le HTC U11 échoue son test de durabilité avec un écran fissuré</h2>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <p>
            Le HTC U11 a été officiellement annoncé au mois de mai, et l’appareil apporte beaucoup d’améliorations et de fonctionnalités à sa gamme de smartphones. Mais s’il excelle, le HTC U11 a récemment été soumis...
          </p>
            <button class="btn btn-custom">Lire la suite</button>
          <p>Posted on <?php the_time('F jS, Y') ?></p>
        </article>
        <article class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
          <img src="img/smartphone.jpg" alt="smartphone" id="smartphone">
        </article>
        <?php get_sidebar_tab(); ?>
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
           <img src="img/VR.jpg" alt="vr" id="vr">
           <h2>E3 2017 : Sony révèle de bonnes raisons d’acheter le PlayStation VR</h2>
           <p>
             La conférence lors de l’E3 2017 de Sony vient près de 8 mois après la sortie de son casque de réalité virtuelle (VR), le PlayStation VR. Cet évènement mondial dédié à tous les gamers...
           </p>
             <button class="btn btn-custom">Lire la suite</button>
          <p>Posted on <?php the_time('F jS, Y') ?></p>
         </article>
         <article class="col-md-5 col-lg-5 col-xs-12 col-sm-12">
          <a href="#"><u>Applications</u></a>
           <img src="img/appli.jpg" alt="appli" id="appli" class="img-responsive center-block">
           <h2>Le programme Android Excellence met en exergue les meilleures apps Android</h2>
           <p>
             Google recherche de nouvelles façons de promouvoir et d’afficher des applications et des jeux qui offrent une expérience Android de haute qualité. Et, à cette fin, la société a lancé Android Excellence, un nouveau programme...
           </p>
            <button class="btn btn-custom">Lire la suite</button>
           <p>Posted on <?php the_time('F jS, Y') ?></p>
         </article>
       </div>
     </div>
   </section>
 </div>
 </div>
   <div>

   </div>
   <?php get_footer(); ?>
