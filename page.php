<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head profile="http://gmpg.org/xfn/11">   <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>   <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats --> <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" /> <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" /> <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" /> <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>   <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>   </head> <body>


<?php
/*
Template Name: page à propos
*/
?>

<?php get_header(); ?>
<!--Article 1-->
 <section class="container-fluid article">
   <div class="container">
     <div class="row">
       <hr class="separator">
        <article class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
          <a href="#"><u>A propos</u></a></br>
        </article>
        <article class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
          <h2>Les débuts du blog</h2>
          <p>
            Ce blog a été créé en 2017. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</br>
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
    </section>
    <section class="container-fluid article">
      <div class="container">
        <div class="row">
          <hr class="separator">
           <article class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
             <img src=>
           </article>
           <article class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
             <h2>L'objectif de ce blog</h2>
             <p>
               Nous avons la volonté de vous tenir informé de toute l'actualité de la technologie. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</br>
               Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
             </p>
           </div>
         </div>
       </section>
<div>

</div>
<?php get_footer(); ?>
