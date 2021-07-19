<!-- Home.php permet d'afficher les articles grâce à une boucle sur la page des articles (âge actualites dans le Back de wp) -->

<?php get_header() ?>

<section class="first_section">

    <form method="get" class="filter_form" id="searchform" action="<?php echo esc_url( home_url( 'actualites' ) ); ?>">
        <h3 class="title_section_unerlined">Tous les articles</h3>
        <div class="filter_option">
            <label for="s"></label>Filtrer : </label>
            <?php wp_dropdown_categories('show_option_all=Toutes les catégories' ); ?>
            <input type="submit" class="submit" name="submit" id="searchsubmit" value="Rechercher" />
        </div>
    </form>

    <?php if (have_posts()): ?>
    <div class="all_articles">
    <?php while(have_posts()): the_post(); ?>
        <div class="blog-card row">
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
        <?php endwhile ?>
    </div>

    <?php gedem_pagination() ?>

    <?php else: ?>
        <h1>Pas d'article</h1>
    <?php endif; ?>

</section>

<?php get_footer() ?>