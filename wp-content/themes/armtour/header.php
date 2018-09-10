<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <meta charset="<?php bloginfo('charset');?>">       
    <?php wp_head();?>
</head>
<body>
	<header>
		<div class="header-forms">
			<div class="ul-first-about">
				<ul>
					<li><i class="fas fa-map-marker-alt"></i>Andranik street 42/a</li>
					<li><i class="fas fa-phone"></i>+(374)-55-55-55-55</li>
				</ul>
			</div>
			<div class="ul-second-with_widget">
				<div class="translate-form">
					<?php echo do_shortcode('[gtranslate]'); ?>
				</div>
				<div class="search-form">
					<?php get_search_form(); ?>						
				</div>
			</div>
		</div>
		<hr/>
		<div class="middle-content-header">
			<div class="name">
				<a href="<?php echo home_url(); ?>">
					<img src="https://s3.amazonaws.com/pikpsdnw/wp-content/uploads/2017/09/16163218/01-41.png" class="logo-header">
					<h3><?php bloginfo('name'); ?></h3>
				</a>
			</div>			
			<nav class="navigation-menu-top">
				<?php 
                    $shlor = array(
                        "theme_location" => "poghos"
                    );
                    wp_nav_menu( $shlor );
                ?>
			</nav>
		</div>
		<?php 
			$class = "";
			if(!is_page('home')) $class="no_display";
		?>
		<div class="<?php echo $class; ?>">
			<div class="center-welcome">
				<h1 class="m-big font-big">Welcome</h1>
				<h3 class="m-middle font-middle"><?php bloginfo('description'); ?></h3>			
			</div>			
		</div>
	</header>
