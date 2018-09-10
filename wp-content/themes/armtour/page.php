<?php
get_header();
$req = $_SERVER['REQUEST_URI'];
$teg = "<h2 class='h2-about'>A FRIENDLY LOCAL COMPANY</h2>";
$request = explode("/",$req);
if( have_posts() ){
    while( have_posts() ){
        the_post();
        ?>
        <div class="title-<?php echo $request[2]; ?>">
    	   <h2 style="width: 80%;margin: auto;margin-top:25px;color:#0b89b2;"><?php the_title(); ?></h2>
            <?php if(is_page('about')) echo $teg; ?>
        </div>
        <article class="post <?php echo $request[2]; ?>">
            <!-- <div class="post-content"> -->
            	<p><?php the_content(); ?></p>
            <!-- </div> -->
        </article>
        <?php
    }
}

get_footer();
?>