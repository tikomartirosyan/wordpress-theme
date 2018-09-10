<?php
/*
Template Name: my template
*/


get_header();
   
if( have_posts() ){
    while( have_posts() ){
        the_post();
        ?>
        <article class="post">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        </article>
        <?php
    }
}

get_footer();
?>
