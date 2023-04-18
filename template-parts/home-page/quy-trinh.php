<?php
$image		  		= rwmb_meta('quytrinh-image');
$title        		= rwmb_meta('quytrinh-title');
$content_lefts 		= rwmb_meta('qtcontent-left');
$content_rights 	= rwmb_meta('qtcontent-right');
?>
<div class="home-quytrinh">
	<div class="home-quytrinh__wrap container">
		<div class="sanpham__title wow animate__fadeInDown">
			<h2 class="title"><?= wpautop($title) ?></h2>
		</div>
		<div class="home-quytrinh__inner">
			<div class="home-quytrinh__image wow animate__fadeInLeft img_zoomAnimation">
				<img src="<?= esc_url($image['full_url']) ?>" alt="<?= esc_attr($title) ?>" />
			</div>
			<div class="home-quytrinh__content home-quytrinh__left">
				<?php
				foreach ($content_lefts as $key => $content_left) :
					$left_title   = $content_left['qttitle-left'];
					$left_desc 	  = $content_left['qtdesc-left'];
				?>
					<div class="home-quytrinh__item wow animate__fadeInRight" data-wow-delay="0.<?= $key ?>s">
						<h3 class="title-mini"><?= $left_title ?></h3>
						<div class="content">
							<?= wpautop($left_desc) ?>
						</div>
					</div>
				<?php
				endforeach;
				?>
			</div>
			<div class="home-quytrinh__content home-quytrinh__right">
				<?php
				foreach ($content_rights as $key => $content_right) :
					$right_title   = $content_right['qttitle-right'];
					$right_desc 	  = $content_right['qtdesc-right'];
				?>
					<div class="home-quytrinh__item wow animate__fadeInRight" data-wow-delay="0.<?= $key + 3 ?>s">
						<h3 class=" title-mini"><?= $right_title ?></h3>
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