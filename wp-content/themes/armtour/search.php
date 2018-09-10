<?php 
	get_header(); 
	// if(the_search_query() == "") {
	// 	echo "<h2 style='text-align:center;margin-bottom: 400px;'>You must write something</h2>";
	// 	get_footer();
	// 	die();
	// }
?>
<div class="content-box-search">
	<?php
		if( have_posts() ){
	    	?>
				<h2>Search results for <b class="b-search-query"><?php the_search_query(); ?></b> </h2>   
			<?php 
		    while( have_posts() ){
		        the_post();
		        get_template_part("content");
		    }
		}
		else{
		    echo "<h2 style='text-align:center;margin-bottom: 400px;'>No content found.</h2>";
		}
	?>
</div>
<?php
	get_footer();
?>
