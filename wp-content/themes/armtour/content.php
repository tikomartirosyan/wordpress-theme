<article class="post-article">
    <?php if(has_post_thumbnail() ){
    ?>
        <div class="first-content-thumbnail">
                <?php the_post_thumbnail('shlor');?>       
        </div>
    <?php
    }?>            
    <div class="content-all">
        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>                
        </h2>
        <p class="post-info">
            <?php the_time("l, F j, Y"); ?> | by               
            <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') );?>">
                <?php the_author(); ?>
            </a> | posted in 
            <?php $cats = get_the_category();
            foreach( $cats as $category ){
                $link = get_category_link($category->term_id);
                echo "<a href='$link'>" . $category->name . "</a> ";
            }
            ?>             
        </p>
        <p><?php the_excerpt(); ?></p>
    </div>
</article>