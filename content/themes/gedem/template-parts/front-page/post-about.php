  <?php
/**
 * Template affichant la section A propos 
 *
 * 
 */
?>

<h3>Qui sommes-nous ?</h3>
<div class="sct_about">
    <div class="block1">
        <p class="gedem">Le GEDEM c'est...</p>
        <div class="icon">
            <img src="<?php the_field( 'icon_about_1' ); ?>" alt="icon representant un groupe" data-aos="fade-right" data-aos-duration="1500">
            <p data-aos="fade-up" data-aos-duration="1500"><?php the_field( 'intitule_about_1' ); ?></p>
        </div>
        <div class="icon">
            <img src="<?php the_field( 'icon_about_2' ); ?>" alt="icon representant la collecte" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150">
            <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150"><?php the_field( 'intitule_about_2' ); ?></p>
        </div>
        <div class="icon">
            <img src="<?php the_field( 'icon_about_3' ); ?>" alt="icon representant un batiment administatif" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300">
            <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"><?php the_field( 'intitule_about_3' ); ?></p>
        </div>
    </div>
    <div class="about_img">
        <lottie-player class="animation_loop" src="https://assets2.lottiefiles.com/packages/lf20_mboj5x.json"  background="transparent"  speed="1" loop autoplay></lottie-player>
    </div>
</div>

