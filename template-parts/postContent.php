<div class="postContent">
	<div class="postContent_image">
		<a href="<?= get_permalink() ?>">
			<?=	get_the_post_thumbnail() ?>
		</a>
		<div class="postContent_date">
			<?php Template_function::getIcon('date') ?>
			<?= get_the_date('d/m/Y') ?>
		</div>
	</div>
	<div class="postContent_title">
		<a href="<?= get_permalink() ?>">
			<?= get_the_title() ?>
		</a>
		<div class="postContent_dec">
			<?= get_the_excerpt() ?>
		</div>
	</div>

</div>