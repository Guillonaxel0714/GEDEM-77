<?php
/**
 * Template affichant la section Vice-Présidence sur la page gouvernance
 *
 * 
 */

$vice_presidence_query = new WP_Query(
    [
        'post_type'      => 'vice-prsidence', // custom post type associé
        'orderby'        => 'menu_order', // Trie l'ordre du BO
        'order'          => 'ASC',
        'posts_per_page' => -1, // Toutes les pages enfants
    ]
);

?>

<section class="sct-vice-presidence">
    <h3 class="title_section_unerlined">Vice-présidence</h3>
    <div class="all_cards">
    <?php
    if ( $vice_presidence_query->have_posts() ) :
        while ( $vice_presidence_query->have_posts() ) :
        $vice_presidence_query->the_post();
        ?>
        <div class="card_presidence">
            <div class="card_name">
                <p><?php the_field( 'first_name' ); ?> <span><?php the_field( 'last_name' ); ?></span></p>
            </div>
            <div class="imgBx">
                <img src="<?php the_field( 'photo_vice_president' ); ?>" alt="Photo des vices-présidents">
            </div>
            <div class="details">
                <p><?php the_field( 'poste_occupe' ); ?> du<br><span><?php the_field( 'syndicat_name' ); ?></span></p>
            </div>
        </div>
        <?php
        endwhile;
        wp_reset_postdata();
    endif; ?>
    </div>
</section>