<?php
	$image      = rwmb_meta('banner-image');
	$title 		= rwmb_meta('banner-title');
	$content 	= rwmb_meta('banner-content');
	$buttons  	= rwmb_meta('banner-buttons') ?? [];
?>
<div class="home-banner">
	<div class="home-banner__wrap container">
		<div class="home-banner__inner">
			<h2 class="title"><?= wpautop($title) ?></h2>
			<div class="home-banner__content">
				<?= wpautop($content) ?>
			</div>
			<div class="home-banner__btn">
				<?php
					foreach ( $buttons as $key => $button) :
					$name_btn 		= $button['button-name'];
					$title_btn      = $button['button-title'];
					$desc_btn 		= $button['button-desc'];
				?>
					<div class="home-banner__btn-item<?= $key ?>">
						<a class="home-banner-form btn" href="#banner-form<?= $key ?>"><?= $name_btn ?></a>
						<div id="banner-form<?= $key ?>" class="home-banner__btn-form mfp-hide white-popup-block">
							<h3 class="title-mini"><?= esc_html($title_btn) ?></h3>
							<p class="content"><?= esc_html($desc_btn) ?></p>
							<div class="form-email">
								<?= do_shortcode('[fluentform id="2"]') ?>
							</div>
						</div>
					</div>
				<?php
					endforeach;
				?>
			</div>
		</div>
		<div class="home-banner__image">
			<img src="<?= esc_url( $image['full_url'] )?>" alt="<?= esc_attr($title) ?>" />
		</div>
	</div>
</div>