<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>

<section class="contact_sct first_section" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">

    <?php echo do_shortcode( '[contact-form-7 id="158" title="formulaire de contact GEDEM"]' ); ?>

</section>

<section class="gedem_info">
        <div class="coordonne">
            <h3 class="title_section_unerlined"><?php the_field( 'title_section' ); ?></h3>
            <div>
                <p><?php the_field( 'name_siege_social' ); ?></p>
                <p><?php the_field( 'location_siege_social' ); ?></p>
                <p><?php the_field( 'departement' ); ?></p>
                <p>Téléphone : <span><?php the_field( 'phone_number' ); ?></span></p>
            </div>
        </div> 
        <div class="syndicats">
            <h3 class="title_section_unerlined">Coordonnées des syndicats membres</h3>
            <div id="mapid"><?php echo do_shortcode('[ultimate_maps id="1"]')?></div>
       </div>
    </section>


<?php get_footer(); ?>