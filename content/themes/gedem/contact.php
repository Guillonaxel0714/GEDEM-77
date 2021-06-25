<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>

<section class="contact_sct" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">

    <?php echo do_shortcode( '[contact-form-7 id="158" title="formulaire de contact GEDEM"]' ); ?>

</section>

<section class="gedem_info">
        <div class="coordonne">
            <div>
                <h3>Coordonnées</h3>
                <p>Mail: <span>contact@gedem.fr</span></p>
                <p>Téléphone : <span>01 64 83 58 60</span></p>
            </div>
            <div>
                <h3>Siège social</h3>
                <p><span> SMITOM LOMBRIC</span></p>
                <p><span>Rue du tertre de Chérisy</span></p>
                <p><span>77 000 Vaux-le-Pénil</span></p>
            </div>
        </div> 
        <div class="syndicats">
            <h3>Coordonnées des syndicats membres</h3>
            <div id="mapid"></div>
       </div>
    </section>


<?php get_footer(); ?>