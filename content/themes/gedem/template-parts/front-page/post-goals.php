<?php
/**
 * Template affichant la section A propos 
 *
 * 
 */
?>

<h3><?php the_field( 'section_goals_title' ); ?></h3>
<div class="all_goals" style="background-image: url('<?php the_field( 'background_img' ); ?>');">
    <div class="goal">
        <p class="title_goal_1"><?php the_field( 'title_goal_1' ); ?></p>
        <p class="goal_txt"><?php the_field( 'text_goal_1' ); ?></p>
    </div>
    <div class="goal">
        <p class="title_goal_2"><?php the_field( 'title_goal_2' ); ?></p>
        <p class="goal_txt"><?php the_field( 'text_goal_2' ); ?></p>
    </div>
    <div class="goal">
        <p class="title_goal_3"><?php the_field( 'title_goal_3' ); ?></p>
        <p class="goal_txt"><?php the_field( 'text_goal_3' ); ?></p>
    </div>
    <div class="goal">
        <p class="title_goal_4"><?php the_field( 'title_goal_4' ); ?></p>
        <p class="goal_txt"><?php the_field( 'text_goal_4' ); ?></p>
    </div>
</div>