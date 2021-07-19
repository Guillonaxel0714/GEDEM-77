<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="sct-single-article first_section">
        <h1><?php the_title(); ?></h1>
        <div class="img_article">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="photo de l'article">
        </div>
        <div class="paragraphe_article">
            <p><?php the_content(); ?></p>
        </div>
    </section>
<?php endwhile;
endif; ?>

<section class="article_pagination">
    <div class="site__navigation">
    	<div class="site__navigation__prev">
    		<a><?php previous_post_link( '<p>Article précédent</p><br>%link' ); ?></a>
        </div>
        <div class="site__navigation__next">
            <a><?php next_post_link( '<p>Article suivant</p><br>%link' ); ?></a> 
        </div>
    </div>
</section>

<?php get_footer() ?>