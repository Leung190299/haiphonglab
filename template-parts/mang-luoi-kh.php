<?php
	$title       = rwmb_meta('mangluoi-title', ['object_type' => 'setting'], 'mangluoi');
	$desc 		 = rwmb_meta('mangluoi-desc', ['object_type' => 'setting'], 'mangluoi');
	$images 	 = rwmb_meta('mangluoi-image', ['object_type' => 'setting'], 'mangluoi');
?>
<div class="mangluoi">
	<div class="mangluoi__wrap container">
		<h2 class="title"><?= wp_kses_post( $title ) ?></h2>
		<div class="mangluoi__desc"><?= wpautop( $desc ) ?></div>
		<div class="mangluoi__inner">
			<?php
				foreach ( $images as $image ) :
			?>
				<img src="<?= $image['full_url']; ?>">
			<?php
				endforeach;
			?>
		</div>
	</div>
</div>