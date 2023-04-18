<?php
	$title        		= rwmb_meta('chiendich-title', ['object_type' => 'setting'], 'chiendich');
	$contents 			= rwmb_meta('chiendich-contents', ['object_type' => 'setting'], 'chiendich');
?>
<div class="chiendich">
	<div class="chiendich__wrap container">
		<h2 class="title"><?= wp_kses_post( $title ) ?></h2>
		<div class="chiendich__slide">
			<?php
				foreach ( $contents as $content ) :
				$logo     = $content['chiendich-logo'];
				$view     = $content['chiendich-view'];
				$click    = $content['chiendich-click'];
				$desc     = $content['chiendich-desc'];
				$title_mini = $content['chiendich-titlemini'];
				$image 		= $content['chiendich-image'];
			?>
				<div class="chiendich__inner">
					<div class="chiendich__item">
						<div class="chiendich__left">
							<?php Template_function::nvn_get_image_id($logo) ?>
							<div class="chiendich__left-number">
								<p class="title"><strong><?= $view ?></strong><span>Views</span></p>
								<p class="title"><strong><?= $click ?></strong><span>Clicks</span></p>
							</div>
						</div>
						<div class="chiendich__right">
							<?= wpautop( $desc ) ?>
						</div>
					</div>
					<div class="chiendich__content">
						<h3 class="chiendich__content-title"><?= wp_kses_post($title_mini) ?></h3>
						<div class="img_zoomAnimation">
							<?php Template_function::nvn_get_image_id($image) ?>
						</div>
					</div>
				</div>
			<?php
				endforeach;
			?>
		</div>
	</div>
</div>