<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?>
    </head>
    <header id="header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <?php if (is_active_sidebar('header-top-left')) { ?>
                            <?php dynamic_sidebar('header-top-left'); ?>
                        <?php } ?>
                    </div>			
                    <div class="col-sm-6">
                        <?php if (is_active_sidebar('header-top-right')) { ?>
                            <?php dynamic_sidebar('header-top-right'); ?>
                        <?php } ?>
                    </div>	
                </div>	
            </div>
        </div>
        <div class="logo-menu">
            <div class="container">
                <div class="row">
                    <div class="logo pull-left">
                        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                        <h4><?php bloginfo('description'); ?></h4>
                    </div>
                    <div class="main-menu pull-right">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="navbarCollapse" class="collapse navbar-collapse">
                                <?php presentation_menu('primary-menu'); ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<body <?php body_class(); ?> >

