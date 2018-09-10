		<footer>
			<div class="footer-first-div-mail">
				<div class="container-footer">
					<div class="with-form">
						<img src="http://landing.engotheme.com/html/skyline/demo/images/Home-1/footer-top-icon-l.png">
						<form action="#" method="post">
							<input type="email" name="mail">
							<input type="submit" name="submit-footer" value="SEND">
						</form>
					</div>
					<div class="social-links">
						<?php 
		                    $smenu = array(
		                        "theme_location" => "footer"
		                    );
		                    wp_nav_menu( $smenu );
		                ?>
					</div>
				</div>
			</div>
			<div class="parent-general-footer-content">
				<div class="container-footer-second">
					<div class="logo-about">
						<div class="name">
							<a href="<?php echo home_url(); ?>">
								<img src="https://s3.amazonaws.com/pikpsdnw/wp-content/uploads/2017/09/16163218/01-41.png" class="logo-header">
								<h3><?php bloginfo('name'); ?></h3>
							</a>
						</div>	
						<div class="about-footer">
							<p>Knowing little to nothing about business or sightseeing he wrote a quick 18 point plan on the back of a parking lot sheet and implemented it.</p>
						</div>
					</div>
					<div class="second-menu-in-footer">
						<?php 
		                    $menu_footer = array(
		                        "theme_location" => "poghos"
		                    );
		                    wp_nav_menu( $menu_footer );
		                ?>
					</div>	
				</div>
				<p class="copyright">&copy; <?php echo date("Y"); ?></p>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>	