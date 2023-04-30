<a href="<?= get_permalink() ?>" class="postItem">
	<div class="postItem_image">
		<?= get_the_post_thumbnail() ?>
	</div>
	<div class="postItem_body">
		<div class="postItem_title"><?= get_the_title() ?></div>
		<div class="postItem_des"><?= get_the_excerpt() ?></div>
		<div class="postItem_date"><?= get_the_date('D/M/Y') ?></div>
	</div>
</a>