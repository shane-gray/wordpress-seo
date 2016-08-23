<?php

class WPSEO_Config_Field_Environment extends WPSEO_Config_Field_Choice {
	public function __construct() {
		parent::__construct( "environment" );

		$this->set_property( 'label', 'Please specify the environment {site_url} is running in.' );

		$this->add_choice( 'production', 'Production - live site.' );
		$this->add_choice( 'staging', 'Staging - copy of live site used for testing purposes only.' );
		$this->add_choice( 'development', 'Development - locally running site used for development purposes.' );
	}
}
