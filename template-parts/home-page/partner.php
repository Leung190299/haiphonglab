<?php
$partners = get_field('partners');
?>
<div class="partner section">
	<div class="container">
		<div class="section_label wow animate__fadeInDown" data-wow-duration="1s">
			<h2 class="label">Đối tác </h2>
		</div>
		<div class="partner_body section_body wow animate__fadeInDown" data-wow-duration="1s">
			<?php
			foreach ($partners as $parner) :
			?>
				<a href="<?= $parner['link'] ?>" class="partner_item">
					<?= Template_function::getImageId($parner['image']) ?>
				</a>
			<?php
			endforeach;
			?>
		</div>
	</div>
</div>