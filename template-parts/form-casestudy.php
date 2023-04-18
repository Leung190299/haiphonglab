<?php
	$image       = rwmb_meta('formcase-image', ['object_type' => 'setting'], 'formcase');
	$title       = rwmb_meta('formcase-title', ['object_type' => 'setting'], 'formcase');
	$desc 		 = rwmb_meta('formcase-desc', ['object_type' => 'setting'], 'formcase');
?>
<div class="form-case">
	<div class="form-case__wrap container">
		<img class="form-case__image" src="<?= esc_url($image['full_url']) ?>" alt="<?= esc_attr($title) ?>">
		<div class="form-case__content">
			<h2 class="form-case__title"><?= wpautop($title) ?></h2>
			<div class="form-case__desc"><?= wp_kses_post($desc) ?></div>
			<?= do_shortcode('[fluentform id="3"]') ?>
		</div>
	</div>
</div>