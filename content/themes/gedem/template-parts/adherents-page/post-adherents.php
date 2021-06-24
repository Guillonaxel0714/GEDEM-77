<?php
/**
 * Template affichant la section des partenaires sur la page Adhérents
 *
 * 
 */

$adherents_query = new WP_Query(
    [
        'post_type'      => 'adhérents', // custom post type associé
        'orderby'        => 'menu_order', // Trie l'ordre du BO
        'order'          => 'ASC',
        'posts_per_page' => -1, // Toutes les pages enfants
    ]
);
?>

<section class="members">
    <h3>Les membres</h3>
    <div id="cards"> 
    <?php
    if ( $adherents_query->have_posts() ) :
        while ( $adherents_query->have_posts() ) :
            $adherents_query->the_post();
        ?>
        <div class="card">
            <div class="card__image-holder" style="background-image: url('<?php the_field( 'logo_adherent' ); ?>');"></div>
            <div class="card-title">
                <a href="#" class="toggle-info btn">
                    <span class="left"></span>
                    <span class="right"></span>
                </a>
                <p class="title_card"><?php the_field( 'name_adherent' ); ?></p>
            </div>
            <div class="card-flap flap1">
                <div class="card-description">
                    <p><?php the_field( 'desc_adherent' ); ?></p>
                    <p>Les équipements du syndicat sont composés de : </p>
                    <ol>
                        <li><?php the_field( 'list_install_adherent' ); ?></li>
                    </ol>
                </div>
                <div class="card-flap flap2">
                    <div class="card-actions">
                        <a href="https://www.sirmotom.fr/" class="btn">Afficher</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        endwhile;
        wp_reset_postdata();
    endif; ?>
    </div>
</section>