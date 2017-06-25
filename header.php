<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head profile="http://gmpg.org/xfn/11">   <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>   <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats --> <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" /> <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" /> <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" /> <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>   <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>   </head> <body>


<!--header-->

<div id="header">
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <nav>
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="périphérique.php" target="_blank">Périphériques</a></li>
              <li><a href="applications.php" target="_blank">Applications</a></li>
              <li><a href="nouvelle_tech.php" target="_blank">Nouvelles Tech</a></li>
              <li><a href="wordpress/index.php/a-propos/" target="_blank">A propos</a></li>
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
      <article class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
        <h1><u>L'Actu de la Tech</u></h1>
      </article>

    </section>
</div>


<!--end logo-->
