<?php
/**
 * Template d'un extrait d'article 
 * 
 */
?>

<div class="blog-card">
    <div class="meta">
        <div class="photo" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
        <ul class="details">
            <li class="author"><?php the_author(); ?></li>
            <?php
            $category = get_the_category();
            ?>
            <li><span class="category"><?php echo $category[0]->cat_name; ?></span></li>
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
