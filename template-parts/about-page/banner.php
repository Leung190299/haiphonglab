<div class="banner">
	<?= get_the_post_thumbnail() ?>
</div>
<div class="about_body">

	<div class="container">
		<div class="menuAbout">
			<?php
			 wp_nav_menu([
				'theme_location' => 'about',
				'menu_class' => 'menuAbout_body',
			]);
			?>
		</div>
		<h1 class="about_title">
			<?= get_the_title() ?>
		</h1>
	</div>
</div>