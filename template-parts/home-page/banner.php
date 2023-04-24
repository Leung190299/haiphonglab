<?php
	 $banners = get_field('banner');
?>
<div class="homeBanner">
	<?php
	foreach($banners as $banner):
		?>
		<div class="homeBanner_item">
			<a href="<?= $banner['link'] ?>">
			<?php Template_function::getImageId($banner['image'])  ?>
		</a>
		</div>
		<?php
	endforeach;
	?>
</div>