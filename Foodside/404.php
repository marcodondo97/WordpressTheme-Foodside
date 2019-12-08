<?php
/*The template for displaying 404 pages (not found) */

get_header(); ?>
<div class="row">
    <div class="col-md-8 col-xs-12">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <section class="error-404 not-found" id="section404">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'myfirstheme' ); ?></h1>
                    </header><!-- .page-header -->

                    <div class="page-content">
                        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'myfirstheme' ); ?></p>

                        <?php get_search_form(); ?>

                        <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

                        <?php if ( myfirstheme_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
                        <div class="widget widget_categories">
                            <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'myfirstheme' ); ?></h2>
                            <ul>
                                <?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
                            </ul>
                        </div><!-- .widget -->
                        <?php endif; ?>

                        <?php
						
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'myfirstheme' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

                        <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

                    </div><!-- .page-content -->
                </section><!-- .error-404 -->

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
    <!--col-md-8 col-xs-12 -->
    <?php get_footer(); ?>
