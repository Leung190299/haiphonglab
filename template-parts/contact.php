<?php
	$title   	= rwmb_meta('contact-title');
	$infos    	= rwmb_meta('contact-groups');
	$image   	= rwmb_meta('contact-image');
	$form_title = rwmb_meta('form-title');
	$form_desc  = rwmb_meta('form-desc');
?>

<div class="contact">
	<div class="contact__wrap container">
		<div class="contact__inner">
			<h3 class="contact__title"><?= wp_kses_post($title) ?></h3>
			<?php
				foreach ( $infos as $info ) :
				$icon     = $info['icon'];
				$desc     = $info['content'];
			?>
				<div class="contact__info">
					<?php Template_function::nvn_get_image_id($icon) ?>
					<div class="content"><?= wp_kses_post($desc) ?></div>
				</div>
			<?php
				endforeach;
			?>
			<img class="contact__image" src="<?= esc_url($image['full_url']) ?>"></img>
		</div>
		<div class="contact__form">
			<div class="contact__form-content">
				<h3 class="contact__form-title"><?= wp_kses_post($form_title) ?></h3>
				<p class="contact__form-desc"><?= wp_kses_post($form_desc) ?></p>
				<?= do_shortcode('[fluentform id="1"]') ?>
			</div>
		</div>
	</div>
</div>