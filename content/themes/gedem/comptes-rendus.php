<?php
/**
 * Template Name: comptes-rendus
 *
 *
 */
?>

<?php get_header(); ?>

<?php
$comptes_rendus_query = new WP_Query(
    [
        'post_type'      => 'comptes_rendus', // custom post type associé
        'orderby'        => 'menu_order', // Trie l'ordre du BO
        'order'          => 'ASC',
        'posts_per_page' => -1, // Toutes les pages enfants
    ]
);
?>

<section class="first_section">

    <?php if ( $comptes_rendus_query->have_posts() ) : ?>
        <div class="all_articles">
        <?php while ( $comptes_rendus_query->have_posts() ) :
            $comptes_rendus_query->the_post(); ?>
            <div class="blog-card row">
                <div class="meta">
                    <div class="photo" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
                    <ul class="details">
                        <li class="author"><?php the_author(); ?></li>
                        <li class="date"><?php the_date(); ?></li>
                    </ul>
                </div>
                <div class="description">
                    <h5><?php the_field( 'title_compte_rendu' ); ?></h5>
                    <p><?php the_field( 'desc_compte_rendu' ); ?></p>
                    <p class="read-more">
                        <a href="<?php the_field( 'document_compte_rendu' ); ?>">Voir le doc</a>
                    </p>
                </div>
            </div>
            <?php endwhile ?>
        </div>
        <?php else: ?>
            <h1>Pas de comptes-rendus pour le moment</h1>
    <?php endif; ?>

    </section>

<?php get_footer(); ?>