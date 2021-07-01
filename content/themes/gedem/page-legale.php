<?php
/**
 * Template Name: Mentions légales
 *
 */

get_header();
?>

<section class="mentions_legales">
<?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();

            the_content();
        endwhile;
    endif;
    ?>
</section>

<?php
get_footer();