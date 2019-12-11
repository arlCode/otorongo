<?php
if (! defined('ABSPATH')) {
    exit;
}
/**
 * Template Name: Quote Form
 * @link http://codex.wordpress.org/Pages
 *
 * @package WooFramework
 * @subpackage Template
 */
    get_header();
    global $woo_options;
?>

<div id="content" class="page col-full">

    	<?php woo_main_before(); ?>

<section id="main" class="col-left">

      <?php
          if (have_posts()) {
              $count = 0;
              while (have_posts()) {
                  the_post();
                  $count++; ?>
<article <?php post_class(); ?>>
    <div class="inner">

				<header>
			    <h1 class="top-title"><?php the_title(); ?></h1>
				</header>

        <section class="entry">
        	<h2 class="page-headline"><?php the_field('headline'); ?></h2>
        	<?php the_post_thumbnail(); ?>
        	<!-- <?php the_content(); ?> -->
				</section>

				<div class="reservation__header">
          <div class="reservation__header-wrap">
  					<p class="reservation__intro">We know that an Amazon adventure like this is not one size fits all. Our goal is to offer you the best personalized Amazon adventure at the best possible rate. Filling out the form below and telling us about you, your trip and your interests will help us do that. We'll contact as soon as possible so you can continue to plan your next great adventure. <strong>~ Ivy and Anthony</strong></p>

          <h3>Price Estimates</h3>
  				<div class="price-table">
  					<ul class="price-table__column">
  						<li class="price-table__header">Guest(s)</li>
  						<li class="price-table__cell">1</li>
  						<li class="price-table__cell">2</li>
  						<li class="price-table__cell">3</li>
  						<li class="price-table__cell">4</li>
  						<li class="price-table__cell">5</li>
  						<li class="price-table__cell">6</li>
  					</ul>
  					<ul class="price-table__column">
  						<li class="price-table__header">2 Nights</li>
  						<li class="price-table__cell">$600</li>
  						<li class="price-table__cell">$470</li>
  						<li class="price-table__cell">$450</li>
  						<li class="price-table__cell">$430</li>
  						<li class="price-table__cell">$400</li>
  						<li class="price-table__cell">$380</li>
  					</ul>
  					<ul class="price-table__column">
  						<li class="price-table__header">3 Nights</li>
  						<li class="price-table__cell">$700</li>
  						<li class="price-table__cell">$590</li>
  						<li class="price-table__cell">$520</li>
  						<li class="price-table__cell">$500</li>
  						<li class="price-table__cell">$480</li>
  						<li class="price-table__cell">$450</li>
  					</ul>
  					<ul class="price-table__column">
  						<li class="price-table__header">4 Nights</li>
  						<li class="price-table__cell">$800</li>
  						<li class="price-table__cell">$710</li>
  						<li class="price-table__cell">$600</li>
  						<li class="price-table__cell">$580</li>
  						<li class="price-table__cell">$560</li>
  						<li class="price-table__cell">$530</li>
  					</ul>
  					<ul class="price-table__column">
  						<li class="price-table__header">5 Nights</li>
  						<li class="price-table__cell">$900</li>
  						<li class="price-table__cell">$780</li>
  						<li class="price-table__cell">$660</li>
  						<li class="price-table__cell">$640</li>
  						<li class="price-table__cell">$620</li>
  						<li class="price-table__cell">$600</li>
  					</ul>
  					<ul class="price-table__column">
  						<li class="price-table__header">6 Nights</li>
  						<li class="price-table__cell">$1000</li>
  						<li class="price-table__cell">$850</li>
  						<li class="price-table__cell">$730</li>
  						<li class="price-table__cell">$710</li>
  						<li class="price-table__cell">$690</li>
  						<li class="price-table__cell">$660</li>
  					</ul>
  				</div>
    					<p class="fine-print">Prices ($USD per person) include rooms in lodge, meals and personal guide<br>Assistance with flight and Iquitos hotel arrangements included<br>Prices may vary depending on season and availability<br>Contact us for inforrmation on discounts and custom pricing<br>Children under 12 are 50% off listed price<br></p>
				  </div>

          <div class="reservation__contact callout callout--fossil">
            <h3>Already in Iquitos?</h3>
            <p><strong>Call us at our office</strong><br>051 950 542 907</p>
            <p><strong>Or visit us at our office</strong><br>Jirón Nauta 350_a<br>City of Iquitos<br>
            <a href="https://www.google.com/maps/place/Jir%C3%B3n+Nauta+350,+Iquitos,+Peru/@-3.7473742,-73.2465632,17z/data=!3m1!4b1!4m5!3m4!1s0x91ea10711db425af:0xe474a0ea57786edb!8m2!3d-3.7473796!4d-73.2443745?hl=en-US" target="_blank">Map</a></p>
          </div>
        </div>


				<div class="additionals__wrap">
					<div class="additionals__item">
						<p class="additionals__header">Private house options</p>
						<div class="additionals__option">
							<p><span>Honeymoon House</span> +$20/day</p>
							<p class="fine-print">Private, stand-alone house. Sleeps 2</p>
						</div>
						<div class="additionals__option">
							<p><span>Family House</span> +$25/day</p>
							<p class="fine-print">Private, stand-alone house. Sleeps 6 to 8</p>
						</div>
					</div>

					<div class="additionals__item">
						<p class="additionals__header">Fishing Rentals</p>
						<div class="additionals__option">
							<p><span>River fishing package (Catfish)</span> +$45/3 days</p>
							<p class="fine-print">+$10 for each additional day</p>
						</div>
						<div class="additionals__option">
							<p><span>Lake fishing package (Peacock Bass)</span> +$35/3 days</p>
							<p class="fine-print">+$10 for each additional day</p>
						</div>
					</div>
				</div>



				<?php echo do_shortcode('[gravityform id="1" description="false"]'); ?>

            </div><!-- /.inner -->
        </article><!-- /.post -->

 <?php

              } // End WHILE Statement
          } // End IF Statement?>

</section><!-- /#main -->

		<?php woo_main_after(); ?>

        <?php get_sidebar(); ?>

    </div><!-- /#content -->

<?php get_footer(); ?>
