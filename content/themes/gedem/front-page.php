<?php
/**
 * Template Name: Front Page
 *
 * @package goUpEvents
 */

get_header();
?>

<section class="about" id="about">
    <?php
        get_template_part(
            'template-parts/front-page/post',
            'about'
        );
    ?>
</section>

<section class="objectifs">
    <?php
        get_template_part(
            'template-parts/front-page/post',
            'goals'
        );
    ?>
</section>

    <?php
    get_footer();

?>