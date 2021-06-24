<?php
/**
 * Template affichant la section des partenaires sur la page Adhérents
 *
 * 
 */

$partenaires_query = new WP_Query(
    [
        'post_type'      => 'partenaires', // custom post type associé
        'orderby'        => 'menu_order', // Trie l'ordre du BO
        'order'          => 'ASC',
        'posts_per_page' => -1, // Toutes les pages enfants
    ]
);

?>

<section class="sct_partenaires">
    <h3>Nos partenaires</h3>
    <div class="all_partenaires">
    <?php
    if ( $partenaires_query->have_posts() ) :
        while ( $partenaires_query->have_posts() ) :
        $partenaires_query->the_post();
        ?>
        <div class="partenaire">
            <div class="img_partenaire">
                <img src="<?php the_field( 'logo_partenaire' ); ?>" alt="logo région Ile de France">
            </div>
            <p><?php the_field( 'desc_partenaire' ); ?></p>
          <a href="<?php the_field( 'link_website' ); ?>">En savoir plus</a>
        </div>
        <?php
        endwhile;
        wp_reset_postdata();
    endif; ?>
    </div>
  </section>