<?php
/*
Template Name: actualites
*/
?>
<?php get_header(); ?>

<?php
$last_posts_query = new WP_Query(
    [
        'post_type'         => 'post',
        'orderby'           => 'date',
        'order'             => 'DESC',
        'posts_per_page'    => 6,
        'page'              => 1,
    ]  
);

if( $last_posts_query->have_posts() ) :
?>

<section class="post-actu">
    <h3>Tous les articles</h3>
    <div class="all_articles">

    <?php 
    while ( $last_posts_query->have_posts() ) :
       $last_posts_query->the_post();

       get_template_part(
           'template-parts/front-page/post',
           'excerpt'
       );
    ?>

    <?php endwhile; ?>
    </div>
</section>

<?php 
endif;
?>

<?php get_footer(); ?>