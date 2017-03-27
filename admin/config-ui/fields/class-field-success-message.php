<?php
/**
 * @package WPSEO\Admin\ConfigurationUI
 */

/**
 * Class WPSEO_Config_Field_Success_Message
 */
class WPSEO_Config_Field_Success_Message extends WPSEO_Config_Field {

	/**
	 * WPSEO_Config_Field_Success_Message constructor.
	 */
	public function __construct() {
		parent::__construct( 'successMessage', 'FinalStep' );

		$success_message = sprintf(
		/* translators: %1$s expands to Yoast SEO. */
			__( '%1$s will now take care of all the needed technical optimization of your site. To really improve your site\'s performance in the search results, it\'s important to start creating content that ranks well for keywords you care about. Check out this video in which we explain how to use the %1$s metabox when you edit posts or pages.', 'wordpress-seo' ),
			'Yoast SEO'
		);

		$this->set_property( 'title', 'You\'ve done it!' );
		$this->set_property( 'message', $success_message );
		$this->set_property( 'video', array(
				'url'   => 'https://yoa.st/metabox-screencast',
				'title' => sprintf(
				/* translators: %1$s expands to Yoast SEO. */
					__( '%1$s video tutorial', 'wordpress-seo' ),
					'Yoast SEO'
				),
			)
		);

//		$content_analysis_video = sprintf(
//			'<iframe width="560" height="315" src="https://yoa.st/metabox-screencast" title="%s" frameborder="0" allowfullscreen></iframe>',
//			esc_attr(  )
//		);
//
//		$html .= '<div class="yoast-video-container-max-width"><div class="yoast-video-container">' . $content_analysis_video . '</div></div>';
//
//		$this->set_property( 'html', $html );
	}
}
