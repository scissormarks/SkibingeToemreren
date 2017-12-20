<nav>
	<div class="topnavigation wrapper">
		<div class="topnavwrapper wrapper">
			<div class="topnavelement wrapper">
				<a class="navicons navlogo" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/img/icons/brandnav_icon.png'; ?>">
				</a>
				<a class="topnavtext" href="<?php echo get_home_url(); ?>">Skibinge Tømreren</a>
			</div>
			<div class="topnavelement socialbtns wrapper">
				<a class="topnavtext" href="tel:+4521476901">+45 2147 6901</a>
				<a class="navicons" href="tel:+4521476901"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
				<a class="navicons" href="<?php echo get_template_directory_uri() . '/img/facebook-page.png'; ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>

	<div class="mainnav wrapper">
		<div class="mainnavwrapper wrapper">
			<a class="navicons navlogo" href="<?php echo get_home_url(); ?>">
				<img src="<?php echo get_template_directory_uri() . '/img/icons/brandnav_icon.png'; ?>"/>
			</a>
			<a class="navicons navburger" href="#">
				<img src="<?php echo get_template_directory_uri() . '/img/icons/menu_dark.png'; ?>"/>
			</a>
		    <?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>
		</div>
	</div>
</nav>
