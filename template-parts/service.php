<div class="service">
	<div class="service_image">
		<a href="<?= get_permalink() ?>">
			<?=	get_the_post_thumbnail() ?>
		</a>
	</div>
	<div class="service_title">
		<a href="<?= get_permalink() ?>">
			<?= get_the_title() ?>
		</a>
	</div>
	<a href="<?= get_permalink() ?>" class="service_link">
		<span>xem thêm</span>
		<?php Template_function::getIcon('plus') ?>
	</a>
</div>