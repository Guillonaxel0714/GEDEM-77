<?php
/**
 * Template d'un article avec extrait
 * 
 */
?>


<?php if ( is_front_page() ) : ?>

<div class="blog-card">
    <div class="meta">
        <div class="photo" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
        <ul class="details">
            <li class="author"><?php the_author(); ?></li>
            <li class="date"><?php the_date(); ?></li>
        </ul>
    </div>
    <div class="description">
        <h5><?php the_title(); ?></h5>
        <p><?php the_excerpt(); ?></p>
        <p class="read-more">
            <a href="#">Lire l'article</a>
        </p>
    </div>
</div>

<?php else : ?>


<div class="blog-card row">
    <div class="meta">
        <div class="photo" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
        <ul class="details">
            <li class="author"><?php the_author(); ?></li>
            <li class="date"><?php the_date(); ?></li>
        </ul>
    </div>
    <div class="description">
        <h5><?php the_title(); ?></h5>
        <p><?php the_excerpt(); ?></p>
        <p class="read-more">
            <a href="page_singleArticle.html">Lire l'article</a>
        </p>
    </div>
</div>


<?php endif; ?>