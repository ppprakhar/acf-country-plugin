<?php
/*
Plugin Name: Advanced Custom Fields: ACF Country (edited plugin)
Plugin URI: https://github.com/ppprakhar/acf-country
Description: Display a select field of all countries, in any language and it saves countries name instead of country code. Thanks to "Nicolas Lemoine" https://github.com/nlemoine/acf-country
Version: 2.0.1
Author: Prakhar Kant Tripathi
Author URI: https://github.com/ppprakhar
License: MIT License
License URI: http://opensource.org/licenses/MIT
*/

namespace HelloNico\ACF;

/**
 * Return if Field Loader already exists.
 */
if ( class_exists( 'FieldLoader' ) ) {
	return;
}

/**
 * Field Loader
 */
class FieldLoader {

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->settings = [
			'version' => '2.0.1',
			'url'     => plugin_dir_url( __FILE__ ),
			'path'    => plugin_dir_path( __FILE__ ),
		];

		load_plugin_textdomain( 'acf-country', false, plugin_basename( dirname( __FILE__ ) ) . '/lang' );
		add_action( 'acf/include_field_types', [ $this, 'fields' ] );
		add_action( 'acf/register_fields', [ $this, 'fields' ] );
	}

	/**
	 * Include our ACF Field Types
	 *
	 * @param  integer $version
	 * @return void
	 */
	public function fields( $version = 5 ) {
		include_once 'fields/acf-country.php';
	}
}

new FieldLoader();
