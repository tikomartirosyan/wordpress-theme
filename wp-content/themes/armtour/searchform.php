<form role="search" method="get" id="searchform" action="<?php echo home_url('/');?>">
	<div>
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s">
		<input type="submit" id="searchSubmit" value="Search">
	</div>
</form>