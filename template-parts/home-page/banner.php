<?php
	 $banners = get_field('banner');
?>
<div class="homeBanner wow animate__fadeInDown" data-wow-duration="1s">
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