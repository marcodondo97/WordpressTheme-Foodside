<?php /* Template Name: authors */ get_header();?>



<?php



    $contributor_ids = get_users( array(
        'fields'  => 'ID',
        'orderby' => 'post_count',
        'order'   => 'DESC',
        'who'     => 'authors',
    ) );

    foreach ( $contributor_ids as $contributor_id ) :
        $post_count = count_user_posts( $contributor_id );

        // Move on if user has not published a post (yet).
        if ( ! $post_count ) {
            continue;
        }
    ?>

<div id="contributor-page">
    <div class="contributor-info">
        <div class="contributor-avatar text-center"><?php echo get_avatar( $contributor_id, 132 ); ?></div>
        <div class="contributor-summary">
            <h2 class="contributor-name text-center"><?php echo get_the_author_meta( 'display_name', $contributor_id ); ?></h2>
            <p class="contributor-bio text-center">
                <?php echo get_the_author_meta( 'description', $contributor_id ); ?>
            </p>
            <a class="button contributor-posts-link" href="<?php echo esc_url( get_author_posts_url( $contributor_id ) ); ?>">
                <?php printf( _n( '%d Article', '%d Articles', $post_count, 'twentyfourteen' ), $post_count ); ?>
            </a>
        </div><!-- .contributor-summary -->
    </div><!-- .contributor-info -->
</div><!-- .contributor -->

<?php
    endforeach;


?>
<?php get_footer(); ?>
