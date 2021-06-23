<?php
/**
 * Template affichant Les savoir-faire
 *
 * 
 */

$timeline_query = new WP_Query(
    [
        'post_type'      => 'timeline', // custom post type associé
        'orderby'        => 'menu_order', // Trie l'ordre du BO
        'order'          => 'ASC',
        'posts_per_page' => -1, // Toutes les pages enfants
    ]
);
?>

<section class="dates">
<h3>Les grandes dates</h3>
<div class="timeline">
    <ol>
    <?php
    if ( $timeline_query->have_posts() ) :
        while ( $timeline_query->have_posts() ) :
            $timeline_query->the_post();
        ?>
        <li>
            <div>
                <p class="date_event"><?php the_field( 'date_event' ); ?></p>
                <p><?php the_field( 'desc_event' ); ?></p>
            </div>
        </li>
        <?php
        endwhile;
        wp_reset_postdata();
    endif; ?>
        <li></li>
    </ol>
    
    <div class="arrows">
        <button class="arrow arrow__prev disabled" disabled>
            <i class="fas fa-arrow-circle-left fa-4x"></i>
        </button>
        <button class="arrow arrow__next">
            <i class="fas fa-arrow-circle-right fa-4x"></i>
        </button>
    </div>
</div>
</section>