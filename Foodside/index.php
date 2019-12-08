<?php
/*The main template file*/

get_header(); ?>



<!-- section jumbotron -->
<div id="section-jumbotron-index" class="jumbotron container-fluid">
    <div class="row">
        <div id="jumbotron-div" class="col-md-6 col-md-offset-3 ">
            <h2 class=" text-center"><?php bloginfo( 'name' ); ?></h2>
            <p class="text-center"><?php bloginfo( 'description' ); ?></p>
        </div>
    </div>
</div>

<!--section sticky -->
<div id="section-sticky-index">


    <?php
// get sticky posts from DB
$sticky = get_option('sticky_posts');
// check if there are any
if (!empty($sticky)) {
    // optional: sort the newest IDs first
    rsort($sticky);
    // override the query
    $args = array(
        'post__in' => $sticky
    );
    query_posts($args);
    // the loop
    while (have_posts()) {
         the_post();
         // your code
    }
}
    else
        ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-8 col-sm-8">
                <h1><?php the_title();?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-8 col-sm-8">
                <p> <?php the_content(); ?> </p>
            </div>
            <div class="col-4 col-sm-4 "> <?php the_post_thumbnail('medium_large', ['class' => 'img-responsive center-block ']); ?> <br></div>

        </div>
    </div>
</div>


<!--section search -->
<div id="section-search-index" class="container-fluid" style="background-color:white;">
    <div class="row">

        <h2 class="text-center" id="title-search-index"> <?php printf( esc_html__( 'Search article', 'myfirstheme' )); ?> </h2>

    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form id="form-index" action="<?php echo home_url( '/' ); ?>" method="GET">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder' ); ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                    <div class="input-group-btn">
                        <button class="btn btn-blue" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!--section recent post -->
<div id="section-recentpost-index" class="contaainer-fluid">
    <div class="row">
        <h1 class="text-center"> <?php printf( esc_html__( 'Recent posts', 'myfirstheme' )); ?> </h1>
    </div>
    <div class="row">

        <?php 
$args = array( 'posts_per_page' => '4',
             'ignore_sticky_posts' => 1
             );
$recent_posts = new WP_Query($args);
    
while( $recent_posts->have_posts() ) :  
    $recent_posts->the_post() ?>
        <?php
$excerpt=get_the_excerpt();
        $date= get_the_date();
?>

        <div class="col-md-3 col-sm-3 col-xs-12 " id="recent-thumbnail">
            <div class="thumbnail">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top img-responsive']); ?>
                <div class="caption">
                    <p class="card-text text-center"> <?php the_title() ?></p>

                    <p> <a href="<?php echo get_permalink() ?>"> <?php echo substr($excerpt,0,70)."...";?></a></p>
                    <p><?php echo $date ?></p>
                    <p><a href="<?php echo get_permalink() ?>" class="btn btn-primary" role="button"> <?php printf( esc_html__( 'Read more', 'myfirstheme' )); ?></a></p>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); # reset post data so that other queries/loops work ?>
    </div>

</div>

<!--section categories -->

<div class="container-fluid" id="section-category-index">
    <div class="row">
        <h2 class="text-center" id="title-category-index"> <?php printf( esc_html__( 'Categories', 'myfirstheme' )); ?> </h2>
    </div>
    <div class="row scrollmenu">

        <?php
$categories = get_categories();
   foreach($categories as $category) {
  echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . "<br>" .$category->category_count. '</a>';
   }
?>

    </div>
    <div class="row">
        <div class="col-xs-12">
            <i class="fa fa-long-arrow-left"></i>
            <i class="fa fa-long-arrow-right"></i>
        </div>


    </div>
</div>

<br>
<br>




<div class="row">

    <?php get_footer(); ?>
