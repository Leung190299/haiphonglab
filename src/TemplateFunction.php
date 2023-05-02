<?php


class Template_function {

	public static function getImage( $name ) {       ?>
		<img  class="img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/<?php echo esc_attr( $name ) ?>" alt="">
		<?php
	}
	public static function getIcon( $name ) {
		 $icon = file_get_contents( get_template_directory() . "/images/icons/$name.svg" );
		echo $icon;
	}
	public static function getImageId( $ID ) {
		?>
		<div class="entry-thumbnail">
			<?php echo wp_get_attachment_image( $ID, 'full', false ) ?>
		</div>
		<?php
	}

}
