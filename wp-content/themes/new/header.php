<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
      <?php wp_head(); ?>
  </head>
  <header class="main-header">
      <div class="container">
        <div class="row">
            <div class="col-md-3">
              <div class="logo pull-left">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <h4><?php bloginfo('description'); ?></h4>
            </div>
            </div>
            <div class="col-md-9">
              <div class="main-menu pull-right">
                <?php demo_menu('primary-menu'); ?>
              </div>
            </div>
        </div>
    </div>
</header>
<body <?php body_class(); ?> >
  <div class="container content">
