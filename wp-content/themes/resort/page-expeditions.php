<?php
if (! defined('ABSPATH')) {
    exit;
}
/**
 * Template Name: Expeditions Page
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

<!-- <section id="main" class="homepage-area col-left">
  <div id="page-content"> -->


  <?php if (have_rows('expedition')): ?>

    <?php while (have_rows('expedition')): the_row();
          $headline = get_sub_field('exp_headline');
          $icon = get_sub_field('exp_icon');
    ?>
      <div class="exp__wrap">
        <div class="exp__header">
          <svg class="icon icon--exp icon--<?php echo $icon; ?>">
            <use xlink:href="#<?php echo $icon; ?>">
          </svg>
          <h3 class="exp__title"><?php echo $headline; ?></h3>
        </div>

        <div class="exp__body">
          <div class="exp__content-wrap">
            <?php if (have_rows('exp_text')): ?>
              <div class="exp__text">
                <?php while (have_rows('exp_text')): the_row(); ?>
                  <?php the_sub_field('text', false, false); ?>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>

            <div class="exp__photo-container">
              <?php if (have_rows('exp_photos')): ?>
                  <?php while (have_rows('exp_photos')): the_row();

                    $photo = get_sub_field('photo');
                    $size = 'medium'; // (thumbnail, medium, large, full or custom size)

                    if ($photo) {
                        $image = wp_get_attachment_image($photo, $size);
                    }
                    ?>
                    <div class="exp__photo--test exp__photo--<?php echo $icon; ?>">
                      <?php echo $image; ?>
                    </div>
                  <?php endwhile; ?>

              <?php endif; ?>
            </div>
          </div>

          <?php if (have_rows('exp_callout')): ?>
            <div class="exp__callout-wrap">
              <?php while (have_rows('exp_callout')): the_row();
                $calloutHeadline = get_sub_field('headline'); ?>
                <div class="exp__callout">
                  <?php if ($calloutHeadline): ?>
                    <h4><?php echo $calloutHeadline; ?></h4>
                  <?php endif; ?>
                  <?php the_sub_field('text', false, false); ?>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
      </div>



    </div> <!-- //exp__wrap -->

    <?php endwhile; ?>

<?php endif; ?>




  <?php woo_main_after(); ?>


</div><!-- /#content -->

<?php get_footer(); ?>
