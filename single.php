<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head profile="http://gmpg.org/xfn/11">   <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>   <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats --> <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" /> <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" /> <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" /> <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>   <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>   </head> <body>

  <?php
  /*
  Single Post Template: peripherique
  */
  ?>

<?php get_header(); ?>

<!--Article-->
   <section class="container-fluid article">
     <div class="container">
       <div class="row">
         <hr class="separator">
          <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
            <p>Posté le <?php the_time('d/m/Y') ?></p>
            <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/ordinateur.jpg" alt="ordinateur_portable" id="ordinateur" onmouseover="affi_alt()"class="img-responsive center-block"/>
          </div>
          <?php while(have_posts()) : the_post();?>
          <article class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
            <h2><?php the_title(); ?></h2>
            <p>
              <?php the_content(); ?>
            </p>
          </article>
          <?php endwhile; ?>
          </div>
        </div>
      </section>
    <div></div>



    <?php get_footer(); ?>
