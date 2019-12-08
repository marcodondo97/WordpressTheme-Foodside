<?php
/*The template for displaying the footer*/

?>

</div><!-- #content -->
</div><!-- #page -->
</div><!-- .container -->
</div> <!-- .row -->
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'myfirstheme' ) ); ?>"><?php printf( esc_html__( 'Powered by %s', 'myfirstheme' ), 'WordPress' ); ?></a>
        <span class="sep"> | </span>
        <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'myfirstheme' ), 'Foodside', '<a href="https://github.com/marcodondo97" >Marco Dondo</a>' ); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>

</html>
