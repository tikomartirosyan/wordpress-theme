<?php 
	get_header();
	$query = array(
	    "posts_per_page" => -1,
	    "orderby" => "title",
	    "order" => "ASC"
	);
?>
<div class="flex-gallery-div">
<?php
	$cat = new WP_Query($query);
	if( $cat->have_posts() ){
	    while( $cat->have_posts() ){
	        ?>
	        <?php
		        $cat->the_post();
		        ?>	
		        <div class="container-posts-gallery">
			        <div class="container-image-post-header">    
			        	<?php the_post_thumbnail('cat');?>	
					  	<div class="overlay">
					    	<a href="<?php the_permalink(); ?>">
					    		<div class="text-title">
					    			<?php the_title(); ?>					    				
					    		</div>
					    	</a>
					  	</div>
					</div>
				</div>
	        <?php
	    }
	}	?>
</div>
<?php
	get_footer();		
?>