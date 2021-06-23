<?php
/**
 * Template Name: Front Page
 *
 *
 */

get_header();
?>

<section class="about" id="about">
    <?php
        get_template_part(
            'template-parts/front-page/post',
            'about'
        );
    ?>
</section>


<?php
    get_template_part(
        'template-parts/front-page/post',
        'goals'
    );
?>

<?php
    get_template_part(
        'template-parts/front-page/post',
        'timeline'
    );
?>


<?php
$last_posts_query = new WP_Query(
    [
        'post_type'         => 'post',
        'orderby'           => 'date',
        'order'             => 'DESC',
        'posts_per_page'    => 3,
        'page'              => 1,
    ]  
);

if( $last_posts_query->have_posts() ) :
?>


<section class="post-actu">
    <h3>Les actualités</h3>

    <?php 
    while ( $last_posts_query->have_posts() ) :
       $last_posts_query->the_post();

       get_template_part(
           'template-parts/front-page/post',
           'excerpt'
       );
    ?>

    <?php endwhile; ?>

    <div class="button">
        <a href="#">Tous les articles</a>
    </div>

</section>

<?php 
endif;
?>


<?php
    get_footer();

?>