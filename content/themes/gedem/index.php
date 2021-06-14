<?php

    get_header();

?>

<h1>ceci est un test !</h1>
<section>
    <div class="blocktest">
        <div class="blog-header">
            <h2>Nom du site : <?php wp_title(); ?></h2>
        </div>
    </div>
</section>

<?php if(have_posts()): ?>
    <ul>
    <?php while(have_posts()): the_post(); ?>
        <li>
            <a href="<?php the_permalink() ?>">
                <?php the_title() ?>
            </a>
            - 
            <?php the_author() ?>
        </li>
    <?php endwhile ?>
    </ul>
<?php else: ?>
    <h2>Pas d'article</h2>
<?php endif; ?>

<?php
    get_footer();

?>
