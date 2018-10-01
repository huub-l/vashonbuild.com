<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

/* Please don't rewrite this file in child theme */

function the_core_get_the_theme_id() {
	return 'the-core';
}


function the_core_get_the_theme_name() {
	return esc_html__( 'The Core', 'the-core' );
}


if ( ! function_exists( 'the_core_style_file_name' ) ) :
	/**
	 * Return the file name for file that is generated with all theme styles
	 *
	 * @return string
	 */
	function the_core_style_file_name() {
		return apply_filters( '_filter_the_core_style_file_name', 'the-core-style' );
	}
endif;


function the_core_theme_has_demo_content() {
	return apply_filters( 'filter_the_core_theme_has_demo_content', true );
}


/**
 * @param FW_Ext_Backups_Demo[] $demos
 *
 * @return FW_Ext_Backups_Demo[]
 */
function _the_core_filter_fw_ext_backups_demos( $demos ) {
	if ( is_rtl() ) {
		$demos_array = array(
			'the-advisors-rtl' => array(
				'title'        => esc_html__( 'The Advisors', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/the-advisors-rtl.png',
				'preview_link' => 'https://demo.themefuse.com/he/business-wordpress-theme/',
			),
			'quantum-rtl'      => array(
				'title'        => esc_html__( 'Quantum', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/quantum-rtl.png',
				'preview_link' => 'https://demo.themefuse.com/he/quantum/',
			),
		);
	} else {
		$demos_array = array(
			'skypoint'     => array(
				'title'        => esc_html__( 'Skypoint', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/skypoint.jpg',
				'preview_link' => 'https://demo.themefuse.com/realtor-wordpress-theme/',
			),
			'car-clinic'     => array(
				'title'        => esc_html__( 'Car Clinic', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/car-clinic.jpg',
				'preview_link' => 'https://demo.themefuse.com/car-repair-wordpress-theme/',
			),
			'the-parlor'     => array(
				'title'        => esc_html__( 'The Parlor', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/the-parlor.jpg',
				'preview_link' => 'https://demo.themefuse.com/barber-shop-wordpress-theme/',
			),
			'moves'          => array(
				'title'        => esc_html__( 'Moves', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/moves.jpg',
				'preview_link' => 'https://demo.themefuse.com/dance-wordpress-theme/',
			),
			'yoga'           => array(
				'title'        => esc_html__( 'Yoga', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/yoga.png',
				'preview_link' => 'https://demo.themefuse.com/sport-wordpress-theme/',
			),
			'startapp'       => array(
				'title'        => esc_html__( 'Startapp', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/startapp.png',
				'preview_link' => 'https://demo.themefuse.com/wordpress-app-theme/',
			),
			'the-advisors'   => array(
				'title'        => esc_html__( 'The Advisors', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/the-advisors.png',
				'preview_link' => 'https://demo.themefuse.com/business-wordpress-theme/',
			),
			'kid-quest'      => array(
				'title'        => esc_html__( 'Kid Quest', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/kid-quest.png',
				'preview_link' => 'https://demo.themefuse.com/children-wordpress-theme/',
			),
			'the-trip'       => array(
				'title'        => esc_html__( 'The Trip', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/the-trip.png',
				'preview_link' => 'https://demo.themefuse.com/the-trip-wordpress-theme/',
			),
			'molino'         => array(
				'title'        => esc_html__( 'Molino', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/molino.png',
				'preview_link' => 'https://demo.themefuse.com/molino/',
			),
			'hitched'        => array(
				'title'        => esc_html__( 'Hitched', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/hitched.png',
				'preview_link' => 'https://demo.themefuse.com/hitched/',
			),
			'spotless'       => array(
				'title'        => esc_html__( 'Spotless', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/spotless.png',
				'preview_link' => 'https://demo.themefuse.com/spotless/',
			),
			'creed'          => array(
				'title'        => esc_html__( 'Creed', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/creed.png',
				'preview_link' => 'https://demo.themefuse.com/creed/',
			),
			'the-core'       => array(
				'title'        => esc_html__( 'The Core', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/the-core.png',
				'preview_link' => 'https://demo.themefuse.com/the-core/',
			),
			'hope'           => array(
				'title'        => esc_html__( 'Hope', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/hope.png',
				'preview_link' => 'https://demo.themefuse.com/hope/',
			),
			'gourmet'        => array(
				'title'        => esc_html__( 'Gourmet', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/gourmet.png',
				'preview_link' => 'https://demo.themefuse.com/gourmet/',
			),
			'keynote'        => array(
				'title'        => esc_html__( 'Keynote', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/keynote.png',
				'preview_link' => 'https://demo.themefuse.com/keynote/',
			),
			'wellness'       => array(
				'title'        => esc_html__( 'Wellness', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/wellness.png',
				'preview_link' => 'https://demo.themefuse.com/wellness/',
			),
			'cribs'          => array(
				'title'        => esc_html__( 'Cribs', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/cribs.png',
				'preview_link' => 'https://demo.themefuse.com/cribs/',
			),
			'the-college'    => array(
				'title'        => esc_html__( 'The College', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/the-college.png',
				'preview_link' => 'https://demo.themefuse.com/the-college/',
			),
			'the-chatter'    => array(
				'title'        => esc_html__( 'The Chatter', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/the-chatter.png',
				'preview_link' => 'https://demo.themefuse.com/the-chatter/',
			),
			'quantum'        => array(
				'title'        => esc_html__( 'Quantum', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/quantum.png',
				'preview_link' => 'https://demo.themefuse.com/quantum/',
			),
			'swipe'          => array(
				'title'        => esc_html__( 'Swipe', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/swipe.png',
				'preview_link' => 'https://demo.themefuse.com/swipe/',
			),
			'kaufman'        => array(
				'title'        => esc_html__( 'Kaufman', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/kaufman.png',
				'preview_link' => 'https://demo.themefuse.com/kaufman/',
			),
			'the-pathfinder' => array(
				'title'        => esc_html__( 'The Pathfinder', 'the-core' ),
				'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/the-pathfinder.png',
				'preview_link' => 'https://demo.themefuse.com/the-pathfinder/',
			),
		);
	}

	foreach ( $demos_array as $id => $data ) {
		$demo = new FW_Ext_Backups_Demo( $id, 'piecemeal', array(
			'url'     => 'http://updates.themefuse.com/demos/',
			'file_id' => $id,
		) );
		$demo->set_title( $data['title'] );
		$demo->set_screenshot( $data['screenshot'] );
		$demo->set_preview_link( $data['preview_link'] );

		$demos[ $demo->get_id() ] = $demo;

		unset( $demo );
	}

	return $demos;
}

add_filter( 'fw:ext:backups-demo:demos', '_the_core_filter_fw_ext_backups_demos' );


function the_core_get_the_demo_required_plugins() {
	return array(
		'the-core'         => array(
			array(
				'name' => 'WooCommerce',
				'slug' => 'woocommerce',
			),
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'cribs'            => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'wellness'         => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'keynote'          => array(
			array(
				'name' => 'WooCommerce',
				'slug' => 'woocommerce',
			),
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'the-pathfinder'   => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'kaufman'          => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'swipe'            => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'quantum'          => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'the-chatter'      => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'the-college'      => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
			array(
				'name' => 'WooCommerce',
				'slug' => 'woocommerce',
			),
			array(
				'name' => 'LifterLMS',
				'slug' => 'lifterlms',
			),
		),
		'gourmet'          => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'hope'             => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
			array(
				'name' => 'Give - WordPress Donation Plugin',
				'slug' => 'give'
			),
		),
		'creed'            => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
			array(
				'name' => 'Give - WordPress Donation Plugin',
				'slug' => 'give'
			),
		),
		'spotless'         => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'hitched'          => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'molino'           => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'the-trip'         => array(
			array(
				'name' => 'WooCommerce',
				'slug' => 'woocommerce',
			),
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'kid-quest'        => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'the-advisors'     => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'startapp'         => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'yoga'             => array(
			array(
				'name' => 'WooCommerce',
				'slug' => 'woocommerce',
			),
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'the-parlor'       => array(
			array(
				'name' => 'WooCommerce',
				'slug' => 'woocommerce',
			),
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'moves'            => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'car-clinic'       => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'skypoint'       => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'the-advisors-rtl' => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'quantum-rtl'      => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
	);
}


function the_core_tgm_required_plugins() {
	return array(
		array(
			'name'     => esc_html__( 'Unyson', 'the-core' ),
			'slug'     => 'unyson',
			'required' => true,
		),
		array(
			'name'     => esc_html__( 'Slider Revolution', 'the-core' ),
			'slug'     => 'revslider',
			'source'   => esc_url( 'http://updates.themefuse.com/plugins/revslider.zip' ),
			'required' => true,
		),
		array(
			'name'     => esc_html__( 'LayerSlider WP', 'the-core' ),
			'slug'     => 'LayerSlider',
			'source'   => esc_url( 'http://updates.themefuse.com/plugins/LayerSlider.zip' ),
			'required' => false,
		),
		array(
			'name'     => esc_html__( 'WooCommerce', 'the-core' ),
			'slug'     => 'woocommerce',
			'required' => false,
		),
		array(
			'name'     => esc_html__( 'Smart Slider 3 Pro', 'the-core' ),
			'slug'     => 'nextend-smart-slider3-pro',
			'source'   => 'http://updates.themefuse.com/plugins/nextend-smart-slider3-pro.zip',
			'required' => true,
		),
		array(
			'name'     => esc_html__( 'TranslatePress', 'the-core' ),
			'slug'     => 'translatepress-multilingual',
			'required' => false,
		),
	);
}


function _the_core_auto_install_admin_notice() {
	// Debug notice.
	// update_option( '_the_core_dismiss_autoinstall_notice', '' );
	// update_option( 'tfuse_'.the_core_get_the_theme_id().'_auto_install_state', '' );

	$option_auto_setup = get_option( 'tfuse_' . the_core_get_the_theme_id() . '_auto_install_state', array() );

	if ( defined( 'FW' ) || get_option( '_the_core_dismiss_autoinstall_notice', 0 ) || ! empty( $option_auto_setup['steps']['activate-unyson'] ) || ( isset( $_GET['page'] ) && $_GET['page'] == 'themefuse_auto_setup' ) ) {
		return;
	}

	echo
		'<div class="notice notice-error is-dismissible fw-auto-install-admin-notice">
            <p>' .
		sprintf(
			esc_html__( '%sIMPORTANT%s: You are 2 clicks away from importing the demo content for your website - %sRead the docs%s', 'the-core' ),
			'<strong>',
			' <span class="fw-theme-name">[' . str_replace( array(
				' Parent',
				' Child'
			), '', wp_get_theme()->Name ) . ']</span></strong>',
			'<a target="_blank" href="http://docs.themefuse.com/the-core/your-theme/getting-started/how-to-install-your-wordpress-theme" data-nonce=>',
			'</a>'
		) .
		'</p>
		    <p>
		        <a class="button button-primary" href="' . esc_url( add_query_arg( array( 'page' => 'themefuse_auto_setup' ), admin_url( 'admin.php' ) ) ) . '">' .
		esc_html__( 'Finish Install', 'the-core' ) .
		'</a>
		    </p>
        </div>';
}

add_action( 'admin_notices', '_the_core_auto_install_admin_notice' );


function the_core_dismiss_autoinstall_notice_message() {
	check_ajax_referer( '_the_core_nonce_admin', 'nonce' );
	update_option( '_the_core_dismiss_autoinstall_notice', 1 );
	die();
}

add_action( 'wp_ajax_the_core_dismiss_autoinstall_notice_message', 'the_core_dismiss_autoinstall_notice_message' );