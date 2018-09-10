<?php 
function addStyleSheet(){
    wp_enqueue_style('style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts','addStyleSheet');
function excerpt_length(){
    return 30;
}
// add_action('excerpt_length', 'excerpt_length');
function custom_setup_theme(){    
	register_nav_menus( array(
        "poghos" => __("Primary menu"),
        "footer" => __("Social links")
    ) );
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
    add_image_size('little', 480, 220, true);
}
add_action('after_setup_theme', 'custom_setup_theme');
function widgetInit(){
    register_sidebar( array(
        "id" => "sidebar1",
        "name" => "Sidebar",
        "before_widget" => "<div class='sidebar-content'>",
        "after_widget" => "</div>"
    ) );

    register_sidebar( array(
        "id" => "header",
        "name" => "Header",
        "before_widget" => "<div class=''>",
        "after_widget" => "</div>"
    ) );

    register_sidebar( array(
        "id" => "footer2",
        "name" => "Footer 2",
        "before_widget" => "<div class=''>",
        "after_widget" => "</div>"
    ) );
}

add_action('widgets_init', 'widgetInit');
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );
function last_3_posts(){
    global $authordata;    
    echo "<h2 style='color:#0b89b2;'>Last posts</h2>";
    $query = array(
        "author" => $authordata->ID,
        "posts_per_page" => 3
    );
    $last_posts = new WP_Query($query);
    echo "<ul class='ul-flex-lasts'>";
    if( $last_posts->have_posts() ){
        while($last_posts->have_posts()){
            $last_posts->the_post();
            ?> 
                <div class="cont-last-posts">
                    <div class="container-image-post-header">    
                        <?php the_post_thumbnail('cat');?>  
                        <div class="overlay">
                            <a href="<?php the_permalink(); ?>"><div class="text-title"><?php the_title(); ?></div></a>
                        </div>
                    </div>
                </div>
            <?php
        }
    }
    echo "</ul>";
}

?>