<?php
if (! defined('ABSPATH')) {
    exit;
}
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */

 global $woo_options, $woocommerce;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title><?php woo_title(''); ?></title>
<?php woo_meta(); ?>

<?php
wp_head();
woo_head();
?>

<!-- Hotjar Tracking Code for otorongoexpeditions.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1516043,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
</head>
<body <?php body_class(); ?>>
<?php woo_top(); ?>
<?php echo file_get_contents(__DIR__ .'/includes/images/icons/svg.svg', true); ?>

<div id="wrapper">

    <?php woo_header_before(); ?>

	<header id="header" class="internal-header">

		      <?php woo_nav_before(); ?>

				 <nav id="navigation" role="navigation">
           <?php woo_header_inside(); ?>
					      <?php
                    if (function_exists('has_nav_menu') && has_nav_menu('primary-menu')) {
                        wp_nav_menu(array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'main-nav', 'menu_class' => 'nav', 'theme_location' => 'primary-menu' ));
                    } else {
                        ?>
			        <ul id="main-nav" class="nav fl">

						<?php if (is_page()) {
                            $highlight = 'page_item';
                        } else {
                            $highlight = 'page_item current_page_item';
                        } ?>

						<li class="<?php echo $highlight; ?>"><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home', 'woothemes'); ?></a></li>
						<?php wp_list_pages('sort_column=menu_order&depth=6&title_li=&exclude='); ?>
					</ul><!-- /#nav -->
			        <?php

                    } ?>

				</nav><!-- /#navigation -->

				<!-- <?php woo_nav_after(); ?> -->


	</header><!-- /#header -->

  <div class="secondary-header-wrap">
    <div class="secondary-header">
      <p>Amazon River &nbsp;🇵🇪 &nbsp; Perú</p>
      <div class="phone">
        <p>Iquitos Office</p>
        <svg class="icon--subnav">
          <use xlink:href="#whatsapp">
        </svg>
        <a href="tel:011-51-950-542-907" class="phone__number">011-51-950-542-907</a>
      </div>
      <div class="social">
        <a href="https://www.facebook.com/OtorongoAmazon/" target="_blank">
          <svg class="icon--subnav">
            <use xlink:href="#facebook">
          </svg>
        </a>
        <a href="https://www.instagram.com/otorongo_expeditions/" target="_blank">
          <svg class="icon--subnav">
            <use xlink:href="#instagram">
          </svg>
        </a>
        <a href="https://www.youtube.com/user/otorongolodge" target="_blank">
          <svg class="icon--subnav">
            <use xlink:href="#youtube">
          </svg>
        </a>
      </div>
    </div>
  </div>


	<?php woo_content_before(); ?>
