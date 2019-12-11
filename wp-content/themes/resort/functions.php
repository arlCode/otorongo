<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/*-----------------------------------------------------------------------------------*/
/* Start WooThemes Functions - Please refrain from editing this section */
/*-----------------------------------------------------------------------------------*/

// WooFramework init
require_once ( get_template_directory() . '/functions/admin-init.php' );

/*-----------------------------------------------------------------------------------*/
/* Load the theme-specific files, with support for overriding via a child theme.
/*-----------------------------------------------------------------------------------*/

$includes = array(
				'includes/theme-options.php', 			// Options panel settings and custom settings
				'includes/theme-functions.php', 		// Custom theme functions
				'includes/theme-actions.php', 			// Theme actions & user defined hooks
				'includes/theme-comments.php', 			// Custom comments/pingback loop
				'includes/theme-js.php', 				// Load JavaScript via wp_enqueue_script
				'includes/sidebar-init.php', 			// Initialize widgetized areas
				'includes/theme-widgets.php'			// Theme widgets
				);

// Allow child themes/plugins to add widgets to be loaded.
$includes = apply_filters( 'woo_includes', $includes );

foreach ( $includes as $i ) {
	locate_template( $i, true );
}

if ( is_woocommerce_activated() ) {
	locate_template( 'includes/theme-woocommerce.php', true );
}

/*-----------------------------------------------------------------------------------*/
/* You can add custom functions below */
/*-----------------------------------------------------------------------------------*/
remove_filter( 'the_content', 'wpautop' );


/* adds ability to insert theme shortcodes into CF7 */
add_filter( 'wpcf7_form_elements', 'mycustom_wpcf7_form_elements' );

function mycustom_wpcf7_form_elements( $form ) {
	$form = do_shortcode( $form );

	return $form;
}


// function jquery_mumbo_jumbo()
// {
//     wp_dequeue_script('jquery');
//     wp_enqueue_script('jquery', false, array(), false, true);
// }
// add_action('wp_enqueue_scripts', 'jquery_mumbo_jumbo');


/*add_action('phpmailer_init','send_smtp_email');
function send_smtp_email( $phpmailer )
{
    // Define that we are sending with SMTP
    $phpmailer->isSMTP();

    // The hostname of the mail server
    $phpmailer->Host = "mail.otorongoexpeditions.com";

    // Use SMTP authentication (true|false)
    $phpmailer->SMTPAuth = true;

    // SMTP port number - likely to be 25, 465 or 587
    $phpmailer->Port = "465";

    // Username to use for SMTP authentication
    $phpmailer->Username = "noreply";

    // Password to use for SMTP authentication
    $phpmailer->Password = "Verm0nt21";

    // The encryption system to use - ssl (deprecated) or tls
    $phpmailer->SMTPSecure = "tls";

    $phpmailer->From = "noreply@otorongoexpeditions.com";
    $phpmailer->FromName = "Your Name";
}*/


/*function to add async to all scripts*/
function js_async_attr($tag){
# Add async to all remaining scripts
return str_replace( ' src', ' async="async" src', $tag );
}
add_filter( 'script_loader_tag', 'js_async_attr', 10 );


add_filter( 'gform_form_tag', 'form_tag', 10, 2 );


function form_tag( $form_tag, $form ) {

    if ( $form['id'] != 1 ) { // change 1 to match your form id
        //not the form whose tag you want to change, return the unchanged tag
        return $form_tag;
    }

    // Turn off autocompletion as described here https://developer.mozilla.org/en-US/docs/Web/Security/Securing_your_site/Turning_off_form_autocompletion
    $form_tag = preg_replace( "|action='(.*?)'|", "autocomplete='off' action='/thank-you'", $form_tag);
    return $form_tag;
}


/*-----------------------------------------------------------------------------------*/
/* Don't add any code below here or the sky will fall down */
/*-----------------------------------------------------------------------------------*/
?>
