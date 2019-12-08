<?php
/*The sidebar containing the main widget area */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-md-4 col-xs-12 " id="sidebar">
    <div id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div><!-- #secondary -->
</div><!-- .col-md-4>-->
</div><!-- .row -->
