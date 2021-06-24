<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>

<section class="contact_sct" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">

    <?php echo do_shortcode( '[contact-form-7 id="158" title="formulaire de contact GEDEM"]' ); ?>

</section>


<?php get_footer(); ?>