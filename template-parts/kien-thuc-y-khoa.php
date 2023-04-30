<div class="kienThuc">
	<div class="kienThuc_image">
		<?= get_the_post_thumbnail() ?>
	</div>
	<div class="kienThuc_body">
		<div class="kienThuc_title"><?= get_the_title() ?></div>
		<div class="kienThuc_des"><?= get_the_excerpt() ?></div>
		<div class="kienThuc_date"><?= get_the_date('D/M/Y') ?></div>
	</div>
</div>