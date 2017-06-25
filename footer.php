<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head profile="http://gmpg.org/xfn/11">   <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>   <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats --> <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" /> <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" /> <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" /> <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>   <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>   </head> <body>


<div id="footer">
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
</div>


  </body>
  </html>
