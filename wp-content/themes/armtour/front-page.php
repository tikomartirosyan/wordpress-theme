<?php 
	get_header();
?>
	<?php 
		$query = array(
		    // "cat" => 1,
		    "posts_per_page" => 3,
		    "orderby" => "title",
		    "order" => "ASC"
		);
		if( have_posts() ){
            while( have_posts() ){
                the_post();
                the_content();
            }
        }
	?>
		<?php
			$cat = new WP_Query($query);
			if( $cat->have_posts() ){
			    while( $cat->have_posts() ){
			        ?>
			        <?php
				        $cat->the_post();
				        ?>	
						<div class="flex-container-posts">
					        <div class="container-image-post-header">    
					        	<?php the_post_thumbnail('cat');?>	
							  	<div class="overlay">
							    	<a href="<?php the_permalink(); ?>"><div class="text-title"><?php the_title(); ?></div></a>
							  	</div>
							</div>
							<a style="color: black;" href="<?php the_permalink(); ?>"><div class="excerpt-posts">
								<div><?php the_excerpt(); ?></div>
							</div></a>
						</div>
			        <?php
			    }
			}			
		?>
<?php			
	get_footer();
?>