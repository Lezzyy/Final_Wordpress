<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head profile="http://gmpg.org/xfn/11">   <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>   <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats --> <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" /> <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" /> <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" /> <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>   <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>   </head> <body>

  <?php
  /*
  Template Name: page contact
  */
  ?>

<?php get_header(); ?>

  <!--formulaire-->
  <section class="container-fluid contact">
    <div class="container">
      <div class="row">
        <hr class="separator">
        <h3> Pour nous contacter :</h3>
        <p>lactudelatech@gmail.com</p></br>
        <p>5 boulevard de la liberté</p></br>
        <p>59000 Lille</p>>
      <div class="container">
          <div class="controls controls-row">
            <form method="post" name="formulaire">
              <fieldset>
                <input type="text" name="nom" class="span6" placeholder="Nom"></br>
                <input type="email" name="email" class="span6" placeholder="Email"></br>
                <textarea name="message" rows="8" cols="80" class="span6" placeholder="Votre message"></textarea>
              </fieldset>
            </form>
            <div class="bouton">
              <button onclick="alert('Confirmer votre envoi !');" class="btn btn-custom">Envoyer</button>
            </div>
          </div>
      </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
