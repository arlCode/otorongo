<?php
if (! defined('ABSPATH')) {
    exit;
}

if (! is_admin()) {
    add_action('wp_enqueue_scripts', 'woothemes_add_javascript');
}

if (! function_exists('woothemes_add_javascript')) {
    function woothemes_add_javascript()
    {
        global $woo_options;

/*
        wp_register_script( 'prettyPhoto', get_template_directory_uri() . '/includes/js/jquery.prettyPhoto.js', array( 'jquery' ) );
        wp_register_script( 'enable-lightbox', get_template_directory_uri() . '/includes/js/enable-lightbox.js', array( 'jquery', 'prettyPhoto' ) );
*/
        wp_register_script('google-maps', 'https://maps.google.com/maps/api/js?sensor=false');
        wp_register_script('google-maps-markers', get_template_directory_uri() . '/includes/js/markers.js');
// 		wp_register_script( 'flexslider', get_template_directory_uri() . '/includes/js/jquery.flexslider-min.js', array( 'jquery' ) );
// 		wp_register_script( 'featured-slider', get_template_directory_uri() . '/includes/js/featured-slider.js', array( 'jquery' , 'flexslider' ) );

// 		wp_enqueue_script( 'third party', get_template_directory_uri() . '/includes/js/third-party.js', array( 'jquery' ), $ver = false, $in_footer = true );
        // wp_enqueue_script('general', get_template_directory_uri() . '/includes/js/general.js', array( 'jquery' ), $ver = false, $in_footer = true);

        // Load Google Script on Contact Form Page Template
        if (is_page_template('template-contact.php')) {
            wp_enqueue_script('google-maps');
            wp_enqueue_script('google-maps-markers');
        } // End If Statement

        do_action('woothemes_add_javascript');
    } // End woothemes_add_javascript()
}

// function addStyles()
// {
//     wp_enqueue_style('mainStyles', get_template_directory_uri() . '/style.css');
// }
//
// add_action('wp_enqueue_scripts', 'addStyles', -1);




// if ( ! is_admin() ) { add_action( 'wp_print_styles', 'woothemes_add_css' ); }
//
// if ( ! function_exists( 'woothemes_add_css' ) ) {
// 	function woothemes_add_css () {
// 		wp_register_style( 'prettyPhoto', get_template_directory_uri().'/includes/css/prettyPhoto.css' );
//
// 		do_action( 'woothemes_add_css' );
// 	} // End woothemes_add_css()
// }

// Add an HTML5 Shim

add_action('wp_head', 'html5_shim');

if (! function_exists('html5_shim')) {
    function html5_shim()
    {
        ?>
<!--[if lt IE 9]>
<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
		<?php

    } // End html5_shim()
}



		// wp_enqueue_script('jquery')

function my_init()
{
    if (!is_admin())
    {
        wp_deregister_script('jquery');

        // Load a copy of jQuery from the Google API CDN
        // The last parameter set to TRUE states that it should be loaded
        // in the footer.
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), $ver = false, $in_footer = true);

        // wp_enqueue_script('jquery');
    }
}
add_action('init', 'my_init');






// add_action( 'woothemes_add_javascript' , 'woo_load_featured_slider_js' );
//
// function woo_load_featured_slider_js() {
// 	if ( is_home() ) {
//
// 		//Slider settings
// 		$settings = array(
// 					'featured_speed' => '7',
// 					'featured_hover' => 'true',
// 					'featured_action' => 'true',
// 					'featured_touchswipe' => 'true',
// 					'featured_animation_speed' => '0.6',
// 					'featured_pagination' => 'false',
// 					'featured_nextprev' => 'true',
// 					'featured_animation' => 'fade'
// 					);
//
// 		$settings = woo_get_dynamic_values( $settings );
//
// 		if ( $settings['featured_speed'] == '0' ) { $slideshow = 'false'; } else { $slideshow = 'true'; }
// 		if ( $settings['featured_touchswipe'] ) { $touchSwipe = 'true'; } else { $touchSwipe = 'false'; }
// 		if ( $settings['featured_hover'] ) { $pauseOnHover = 'true'; } else { $pauseOnHover = 'false'; }
// 		if ( $settings['featured_action'] ) { $pauseOnAction = 'true'; } else { $pauseOnAction = 'false'; }
// 		if ( ! in_array( $settings['featured_animation'], array( 'fade', 'slide' ) ) ) { $settings['featured_animation'] = 'fade'; }
// 		$slideshowSpeed = (int) $settings['featured_speed'] * 1000; // milliseconds
// 		$animationDuration = (int) $settings['featured_animation_speed'] * 1000; // milliseconds
// 		$nextprev = $settings['featured_nextprev'];
// 		$manualControls = '';
// 		if ( $settings['featured_pagination'] == 'true' ) {
// 			$pagination = 'true';
// 		} else {
// 			$pagination = 'false';
// 		}
//
// 		$data = array(
// 			'animation' => $settings['featured_animation'],
// 			'smoothHeight' => 'true',
// 			'directionNav' => $nextprev,
// 			'controlNav' => $pagination,
// 			'manualControls' => $manualControls,
// 			'slideshow' => $slideshow,
// 			'pauseOnHover' => $pauseOnHover,
// 			'slideshowSpeed' => $slideshowSpeed,
// 			'animationDuration' => $animationDuration,
// 			'touch' => $touchSwipe,
// 			'pauseOnHover' => $pauseOnHover,
// 			'pauseOnAction' => $pauseOnAction
// 		);
//
// 		wp_localize_script( 'featured-slider', 'woo_localized_data', $data);
//
// // 		wp_enqueue_script( 'featured-slider' );



// 	} // End woo_load_featured_slider_js()
// }
?>
