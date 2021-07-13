<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="sct-single-article first_section">
        <h1 class="title_article"><?php the_title(); ?></h1>
        <div class="img_article">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="photo de l'article">
        </div>
        <div class="paragraphe_article">
            <p><?php the_content(); ?></p>
        </div>
    </section>
<?php endwhile;
endif; ?>

<div class="site__navigation">
	<div class="site__navigation__prev">
		<?php previous_post_link( 'Article Précédent<br>%link' ); ?>
    </div>
    <div class="site__navigation__next">
        <?php next_post_link( 'Article Suivant<br>%link' ); ?> 
    </div>
</div>

<?php get_footer() ?>