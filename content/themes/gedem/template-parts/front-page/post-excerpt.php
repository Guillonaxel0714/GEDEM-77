<?php
/**
 * Template d'un extrait d'article 
 * 
 */
?>

<?php if ( is_front_page() ) : ?>

<div class="blog-card">
    <div class="meta">
        <div class="photo" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
        <ul class="details">
            <li class="author"><?php the_author(); ?></li>
            <li><span class="category"><?php the_category(); ?></span></li>
            <li class="date"><?php the_date(); ?></li>
        </ul>
    </div>
    <div class="description">
        <h5><?php the_title(); ?></h5>
        <p><?php the_excerpt(); ?></p>
        <p class="read-more">
            <a href="<?php the_permalink() ?>">Lire l'article</a>
        </p>
    </div>
</div>

<?php else : ?>

<div class="blog-card row">
    <div class="meta">
        <div class="photo" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
        <ul class="details">
            <li class="author"><?php the_author(); ?></li>
            <li><span class="category"><?php the_category(); ?></span></li>
            <li class="date"><?php the_date(); ?></li>
        </ul>
    </div>
    <div class="description">
        <h5><?php the_title(); ?></h5>
        <p><?php the_excerpt(); ?></p>
        <p class="read-more">
            <a href="<?php the_permalink() ?>">Lire l'article</a>
        </p>
    </div>
</div>

<?php endif; ?>