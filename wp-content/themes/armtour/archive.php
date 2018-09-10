<?php
get_header();
?>

<h1 style="color: #0b89b2;">
    Archive results for
    <?php
    if( is_category() ){
        single_cat_title();
    }
    else if( is_author() ){
        echo "author";
    }
    else if( is_day() ){
        echo get_the_date();
    }
    ?>
</h1>
<style type="text/css">
    .post-article {
        width: 50%;
        margin: auto;
    }
</style>
<?php
if( have_posts() ){
    while( have_posts() ){
        the_post();
        get_template_part("content", get_post_format());
    }
}

get_footer();
?>
