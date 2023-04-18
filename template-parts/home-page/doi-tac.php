<?php
	$image		  	= rwmb_meta('doitac-image');
	$title			= rwmb_meta('doitac-title');
	$contents		= rwmb_meta('doitac-contents');
?>
<div class="home-doitac">
	<div class="home-doitac__wrap container">
		<div class="home-doitac__image">
			<img src="<?= esc_url( $image['full_url'] )?>" alt="<?= esc_attr($title) ?>" />
		</div>
		<div class="home-doitac__content">
			<h2 class="title"><?= wpautop( $title ) ?></h2>
			<div class="home-doitac__inner">
				<?php
					foreach( $contents as $key => $content ) :
						$item_title = $content['content-title'];
						$item_desc  = $content['content-desc'];
						$btn_name 	= $content['button-name'];
						$btn_title 	= $content['button-title'];
						$btn_desc 	= $content['button-desc'];
				?>
					<div class="home-doitac__item">
						<h3 class="title-mini"><?= wp_kses_post( $item_title ) ?></h3>
						<div class="content"><?= wpautop( $item_desc ) ?></div>
						<a class="home-doitac-form btn btn-blue" href="#home-doitac-form<?= $key ?>"><?= $btn_name ?></a>
						<div id="home-doitac-form<?= $key ?>" class="home-banner__btn-form mfp-hide white-popup-block">
							<h3 class="title-mini"><?= esc_html($btn_title) ?></h3>
							<p class="content"><?= wpautop($btn_desc) ?></p>
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
	</div>
</div>