<?php
/*
Template Name: gouvernance
*/
?>

<?php get_header(); ?>



<?php
    get_template_part(
        'template-parts/gouvernance-page/post',
        'president'
    );
?>


<?php
    get_template_part(
        'template-parts/gouvernance-page/post',
        'vices-presidents'
    );
?>


<?php get_footer(); ?>