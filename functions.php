<?php
define( 'SINGOUTLOUD_VERSION', '1.0.0' );

require __DIR__ . '/vendor/autoload.php';

new Sol\Loader;
new Sol\Fields;

require __DIR__ . '/src/TemplateFunction.php';


if ( ! function_exists( 'rwmb_meta' ) ) {
	/**
	 * Fallback function metabox.
	 *
	 * @return mixed
	 */
	function rwmb_meta( $key, $args = [], $post_id = null ) {
		return null;
	}
}
