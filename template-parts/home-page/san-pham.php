<?php
$image        		= rwmb_meta('sanpham-image');
$title        		= rwmb_meta('sanpham-title');
$desc        		= rwmb_meta('sanpham-desc');
$content_lefts 		= rwmb_meta('content-left');
$content_rights 	= rwmb_meta('content-right');

?>
<div class="sanpham">
	<div class="sanpham__wrap container">
		<div class="sanpham__title">
			<h2 class="title"><?= wpautop($title) ?></h2>
		</div>
		<div class="sanpham__desc">
			<?= wpautop($desc) ?>
		</div>
		<div class="sanpham__inner">
			<div class="sanpham__content sanpham__left">
				<?php
				foreach ($content_lefts as $content_left) :
					$left_title   = $content_left['title-left'];
					$left_desc 	  = $content_left['desc-left'];
				?>
					<div class=" sanpham__item wow animate__fadeInLeft">
						<h3 class="title-mini"> <?= $left_title ?> </h3>
						<div class="content">
							<?= wpautop($left_desc) ?>
						</div>
					</div>
				<?php
				endforeach;
				?>
			</div>
			<div class="sanpham__image wow animate__fadeInDown img_zoomAnimation">
				<img src="<?= esc_url($image['full_url']) ?>" alt="<?= esc_attr($title) ?>" />
			</div>
			<div class="sanpham__content sanpham__right">
				<?php
				foreach ($content_rights as $content_right) :
					$right_title   = $content_right['title-right'];
					$right_desc    = $content_right['desc-right'];
				?>
					<div class="sanpham__item wow animate__fadeInRight">
						<h3 class="title-mini"> <?= $right_title ?> </h3>
						<div class="content">
							<?= wpautop($right_desc) ?>
						</div>
					</div>
				<?php
				endforeach;
				?>
			</div>
		</div>
	</div>
</div>