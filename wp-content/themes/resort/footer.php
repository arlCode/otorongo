<?php
if (! defined('ABSPATH')) {
    exit;
}
/**
 * Footer Template
 *
 * Here we setup all logic and XHTML that is required for the footer section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
    global $woo_options;

?>

	<div id="footer-wrapper">

		<footer id="footer" class="col-full">
      <div class="footer-content">
        <div class="testimonial">
          <p>Perfect ending to long holidays in Latin America: jungle survivors. 5 of 5 stars. I stayed in the Otorongo lodge with a friend at the end of 2014. We actually celebrated the New Years there. It was an amazing experience-the location is perfect, the garden is just breathtaking, the staff and the owner are extremely nice and friendly, food is great, rooms are clean and cosy. The expeditions feel very natural, one sees and learns so much! Fishing the piranhas was one of the key bonuses on top of regular walks in the forest/boat rides and spotting of exotic animals. The guides are impressive: knowledgeable, extremely caring – they would almost breathe for you. I felt extremely safe and relaxed. Definitely recommend this experience.</p>
          <p class="author">Lucie – Brussels</p>
        </div>
        <div class="links">
          <ul class="footer-links">
            <li><a href="https://otorongoexpeditions.com/faqs/">FAQs</a></li>
            <li><a href="https://otorongoexpeditions.com/lodge-itinerary">Itinerary</a></li>
            <li><a href="https://otorongoexpeditions.com/contact/">Contact</a></li>
            <li><a href="https://otorongoexpeditions.com/journal/">Articles</a></li>
            <li><a href="https://otorongoexpeditions.com/reservations/">Reservations</a></li>
            <li><a href="https://www.facebook.com/OtorongoAmazon/" target="_blank">Facebook</a></li>
            <li><a href="https://www.youtube.com/user/otorongolodge">YouTube</a></li>
           <li><a href="https://otorongoexpeditions.com/conditions-and-general-policies">Conditions and General Policies</a></li>
          </ul>
        </div>
      </div>

			<div id="copyright" class="col-left">
			<?php if (isset($woo_options['woo_footer_left']) && $woo_options['woo_footer_left'] == 'true') {
    echo stripslashes($woo_options['woo_footer_left_text']);
} else {
    ?>
				<p>🇵🇪 <?php bloginfo(); ?> &copy; <?php echo date('Y'); ?>. <?php _e(' All Rights Reserved.', 'woothemes'); ?></p>

			<?php

} ?>
			</div>

		</footer><!-- /#footer  -->

	</div><!-- /#footer-wrapper -->

</div><!-- /#wrapper -->
<?php wp_footer(); ?>
<?php woo_foot(); ?>
<link href="https://fonts.googleapis.com/css?family=Libre+Franklin:300,300i,400,400i,600,600i,800,800i" rel="stylesheet">
</body>

</html>
