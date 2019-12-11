<?php
// File Security Check
if (! function_exists('wp') && ! empty($_SERVER['SCRIPT_FILENAME']) && basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die('You do not have sufficient permissions to access this page!');
}
?><?php
/**
 * Index Template
 *
 * Here we setup all logic and XHTML that is required for the index template, used as both the homepage
 * and as a fallback template, if a more appropriate template file doesn't exist for a specific context.
 *
 * @package WooFramework
 * @subpackage Template
 */
    get_header('header.php');

?>

    <div id="content" class="col-full">

    	<?php woo_main_before(); ?>


      <section id="main" class="homepage-area col-left">
        <div id="page-content">
          <!-- <article class="post-145 page type-page status-publish hentry"> -->

              <!-- <div class="inner"> -->

                <header>
                  <h1 class="top-title">An Amazon Adventure of a Lifetime</h1>
                </header>

                <!-- <section class="entry"> -->
                  <p>Otorongo Expeditions is a ecologically responsible tour company operating in Peru’s lower Amazon River region. Founded by American/Peruvian couple Anthony and Ivonne Giardenelli over a decade ago, OtoEx provides a variety of services including custom expeditions such as sport fishing, trekking &amp; camping, bird watching and comfortable personalized jungle lodging. Pick and choose what activities you are most interested in and passionate about, after all it’s your adventure.</p>

                  <div class="pricing-block">
                    <p>Our goal is to not only deliver a trip tailored to fit but also at the best possible price. We have pricing estimates available but you can request a free quote for itinerary planning and optimal pricing.</p>
                    <a class="btn btn--main" href="http://otorongoexpeditions.com/create-your-adventure/">Book a Trip</a>
                  </div>


                  <h3><strong>Otorongo Expeditions has a trip for everyone</strong></h3>
                  <div class="videoWrapper">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zjp5Mvt1yaA?ecver=1" frameborder="0" allowfullscreen=""></iframe>
                  </div>

                  <?php if (have_rows('features')): ?>
                    <?php while (have_rows('features')): the_row();
                          // vars
                          $name = get_sub_field('feature_name');
                          $summary = get_sub_field('feature_summary');
                          $image = get_sub_field('feature_image'); ?>

                      <div class="feature">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                        <h3 class="feature__title"><?php echo $name; ?></h3>
                        <p class="feature__summary"><?php echo $summary; ?></p>
                      </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
          </section>


		        <?php woo_main_after(); ?>
        <?php get_sidebar(); ?>

    </div><!-- /#content -->


<?php get_footer(); ?>
