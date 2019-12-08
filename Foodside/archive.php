<?php
/*The template for displaying archive pages */

get_header(); ?>
<div class="row">
    <div class="col-md-8 col-xs-12">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
                </header><!-- .page-header -->

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                <?php $post_id = get_the_ID();?>


                <article id="<?php echo $post_id; ?>">
                    <header class="entry-header">
                        <h1 class="entry-title">
                            <a href="<?php the_permalink(); ?>"> <?php the_title();?>

                            </a>
                        </h1>
                        <div class="entry-meta">
                            <?php the_date();?>
                        </div>
                    </header>
                    <div class="entry-content">

                        <p>
                            <?php the_excerpt();?>
                        </p>
                    </div>
                    <footer class="entry-footer">
                        <span class="comments-link">
                            <a href=" <?php comments_link(); ?> ">
                                <?php printf( esc_html__( 'Comment', 'myfirstheme' )); ?> </a>
                        </span>
                        <span class="edit-link">
                            <?php edit_post_link(); ?>
                        </span>
                    </footer>
                </article>

                <?php endwhile; ?>

                <?php 
            the_posts_navigation();
            ?>

                <?php else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

                <?php endif; ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
    <!--col-md-8 col-xs-12 -->

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
