<?php
	$title        		= rwmb_meta('conso-title');
	$contents 			= rwmb_meta('conso-contents');
?>
<div class="conso">
	<div class="conso__wrap container">
		<h2 class="title"><?= wp_kses_post( $title ) ?></h2>
		<div class="conso__inner">
			<?php
				foreach( $contents as $key => $content ) :
				$image     = $content['conso-image'];
				$number    = $content['conso-number'];
				$donvi 	   = $content['conso-donvi'];
				$desc      = $content['conso-desc'];
				$animate   = $content['conso-animate'];
			?>
				<div class="conso__item <?= $animate ?>">
					<?php Template_function::nvn_get_image_id($image) ?>
					<div class="conso__item-number">
						<span class="count"><?= wp_kses_post( $number ) ?></span><span><?= $donvi ?></span>
					</div>
					<div class="conso__item-desc"><?= wpautop( $desc ) ?></div>
				</div>

			<?php
				endforeach;
			?>
		</div>
	</div>
</div>