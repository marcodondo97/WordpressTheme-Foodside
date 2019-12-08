<?php
/*
 * The header for our theme.
 
 * Displays all of the <head> section and everything up till <div id="content">

 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <!-- #site-navigation -->

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid" id="g">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="<?php echo home_url(); ?>"> <?php bloginfo('name'); ?> </a>

            </div>
            <!--end navbar-header-->
            <div class="collapse navbar-collapse menu-primary" id="bs-example-navbar-collapse-1" style="float:right;">
                <?php
							wp_nav_menu( array(
								'menu'           	=> '',
								'theme_location'    => 'primary',
								'depth'             => 2,
								'container'         => '',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'bs-example-navbar-collapse-1',
								'menu_class'        => 'nav navbar-nav',
								'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								'walker'            => new wp_bootstrap_navwalker())
							);
							?>
                <div class="col-sm-7 col-md-7 pull-right search-navbar">
                    <form class="navbar-form" role="search" method="get" id="searchform" action="<?php bloginfo('home'); ?>">
                        <div class="input-group">
                            <input type="text" id="searchbox" class="form-control" placeholder=" <?php printf( esc_html__( 'Search', 'myfirstheme' )); ?>" name="s" id="s">
                            <div class="input-group-btn">
                                <button class="btn btn-default" id="searchsubmit" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--end navbar-colapse-->
        </div>
        <!--end container-->
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="container-fluid">
        <!-- close in footer -->
        <div id="page" class="hfeed site">
            <!-- close in footer -->
            <div id="content" class="site-content">
                <!-- close in footer -->
