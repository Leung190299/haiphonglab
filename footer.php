<footer class="footer " role="contentinfo">
	<!-- nội dung footer -->
	<div class="footer_info">
		<div class="container">
			<div class="footer_infoBox">
				<?php
				$infoFooter = get_field('infoGroup', 'option');
				if (isset($infoFooter)) :
					foreach ($infoFooter as $info) :
				?>

						<div class="footer_infoItem">
							<div class="footer_infoIcon">
								<?php Template_function::getImageId($info['icon']) ?>
							</div>
							<a href='<?= $info['link'] ?>' class="footer_infoContent">
								<p class="footer_infoTitel"><?= $info['titleInfo'] ?></p>
								<p class="footer_infoValue"><?= $info['value'] ?></p>
							</a>
						</div>

				<?php
					endforeach;
				endif;
				?>
			</div>
		</div>
	</div>
	<div class="footer_body">
		<div class="container">
			<div class="footer_bodyBox">
				<?php

				use HPlab\layout\LayoutFooter;

				$layoutFooter = new LayoutFooter();
				$footerSetting = get_field('footer', 'option');
				foreach ($footerSetting as $seting) :
					$layoutFooter->buildLayout($seting, $seting['acf_fc_layout']);
				endforeach;
				?>
			</div>
		</div>
	</div>
	<div class="footer_contact">
		<div class="container">
			<div class="footer_contactBox">
				<div class="footer_contactContent">
					<?= get_field('contact', 'option') ?>
				</div>
				<div class="footer_contactMap">
					<?= get_field('map', 'option') ?>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="contaiter">
			<div class="container">
				<p><i>Copyright © 2023 </i><strong>HAIPHONGLAB</strong></p>
				<p> <i>Develop by: </i><strong><a href="https://github.com/Leung190299" target="_blank" rel="dofollow"> leung</a></strong></p>
			</div>
		</div>


	</div>
</footer>


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0&appId=612707743856509&autoLogAppEvents=1" nonce="VTv0YAd3"></script>

<?php wp_footer(); ?>
</body>

</html>