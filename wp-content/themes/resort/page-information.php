<?php
if (! defined('ABSPATH')) {
    exit;
}
/**
 * Template Name: Info Page
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

<section id="main" class="homepage-area col-left">
  <div id="page-content">


  <?php if (have_rows('features')): ?>
    <?php while (have_rows('features')): the_row();
          // vars
          $name = get_sub_field('feature_name');
          $summary = get_sub_field('feature_summary');
          $icon = get_sub_field('feature_icon');
          $image = get_sub_field('feature_image'); ?>

      <div class="feature">
        <svg class="icon icon--feature">
          <use xlink:href="#<?php echo $icon; ?>">
        </svg>
        <div class="feature__intro">
          <h3 class="feature__title"><?php echo $name; ?></h3>
          <p class="feature__summary"><?php echo $summary; ?></p>
        </div>
        <div class="feature__image">
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
        </div>
      </div>

    <?php endwhile; ?>
<?php endif; ?>

  </div> <!-- /Page Content -->
</section> <!-- /Main -->


      <?php woo_main_after(); ?>
  <?php get_sidebar(); ?>

</div><!-- /#content -->


<?php get_footer(); ?>
