<?php
/**
 * @package WPSEO\Admin\ConfigurationUI
 */

/**
 * Class WPSEO_Config_Field_Profile_URL_GooglePlus
 */
class WPSEO_Config_Field_Profile_URL_GooglePlus extends WPSEO_Config_Field {

	public function __construct() {
		parent::__construct( 'profileUrlGooglePlus', 'input' );

		$this->set_property( 'label', 'Google+ URL' );
		$this->set_property( 'pattern', '^https:\/\/plus\.google\.com\/([^/]+)$' );
	}
}
