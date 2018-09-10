<?php
get_header();

if( have_posts() ){
    ?>
    <h2>Search results for <?php the_search_query(); ?> </h2>
    <?php
    while( have_posts() ){
        the_post();
        get_template_part("content");
    }
}
else{
    echo "<h2>No content found.</h2>";
}

get_footer();
?>
