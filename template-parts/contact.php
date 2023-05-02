<?php

$address = get_field('address', 'option');
$name = get_field('nameWeb', 'option');
$phone = get_field('phone', 'option');
$email = get_field('email', 'option');
$form = get_field('codeFormContact', 'option');

?>
<div class="contact">
	<div class="contact_info">
		<div class="contact_infoName">
			<?= $name ?>
		</div>
		<div class="contact_content">
			<div class="contact_item">
				<div class="contact_itemBox">
					<div class="contact_itemIcon"><?php Template_function::getIcon('home') ?></div>
					<div class="contact_itemTitle">Địa chỉ:</div>
				</div>
				<div class="contact_itemValue"><?= $address ?></div>
			</div>
			<div class="contact_item">
				<div class="contact_itemBox">
					<div class="contact_itemIcon"><?php Template_function::getIcon('phone') ?></div>
					<div class="contact_itemTitle">Điện thoại:</div>
				</div>
				<div class="contact_itemValue"><?= $phone ?></div>
			</div>
			<div class="contact_item">
				<div class="contact_itemBox">
					<div class="contact_itemIcon"><?php Template_function::getIcon('email') ?></div>
					<div class="contact_itemTitle">Email:</div>
				</div>
				<div class="contact_itemValue"><?= $email ?></div>
			</div>
			<button class="btn" id="btn-map" data-modal="map">Xem bản đồ</button>
		</div>
	</div>
	<div class="contact_form">
		<div class="contact_title">GỬI TIN NHẮN</div>
		<div class="contact_contentForm">
			<?= do_shortcode($form) ?>
		</div>
	</div>
</div>