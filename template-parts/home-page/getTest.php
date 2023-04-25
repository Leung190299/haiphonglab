<?php
$titleTest = get_field('titleGetTest');
$titleSetTest = get_field('titleSetTest');

?>
<div class="getTest">
	<div class="container">
		<div class="getTest_box">
			<div class="getTest_left">
				<h2 class="label">
					<?= $titleTest ? $titleTest : 'XEM KẾT QUẢ XÉT NGHIỆM' ?>
				</h2>
				<?php
				get_template_part('template-parts/formTest');

				?>
			</div>
			<div class="getTest_right">
			<h2 class="label">
					<?= $titleSetTest ? $titleSetTest : 'ĐẶT LỊCH HẸN' ?>
				</h2>
				<?php
				get_template_part('template-parts/formSetTest');
				?>
			</div>
		</div>
	</div>
</div>