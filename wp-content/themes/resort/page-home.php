<?php
if (! defined('ABSPATH')) {
    exit;
}
/**
 * Template Name: Home Page 2
 * @link http://codex.wordpress.org/Pages
 *
 * @package WooFramework
 * @subpackage Template
 */
 get_header('headerindex');
 global $woo_options;
?>

<div id="content" class="page col-full two-col">

<?php woo_main_before(); ?>

<section id="main" class="homepage-area col-left">
<div id="page-content">

<div class="exp__photos">
  <?php
  if (have_rows('home')):
      while (have_rows('home')) : the_row();

        if (get_row_layout() == 'home_photos'):
        if (have_rows('photo_block')):
          ?>

          <div class="exp-container">

          <?php while (have_rows('photo_block')): the_row();

            $photo = get_sub_field('photo');
            $size = 'medium'; // (thumbnail, medium, large, full or custom size)

            if ($photo) {
                $image = wp_get_attachment_image($photo, $size);
            }
            ?>

            
              <div class="exp__photo">
                <?php echo $image; ?>
              </div>

          <?php endwhile; ?>
          </div>
          </div>
          <div class="image-caption">
            <?php $caption = get_sub_field('caption_text', false, false);
            echo $caption; ?>
          </div>

        <?php endif; ?>

      <?php elseif (get_row_layout() == 'home_text'):
      $text = get_sub_field('text', false, false);
      echo $text; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>


   <?php if (have_rows('features')): ?>
     <div class="features-wrap">

     <?php while (have_rows('features')): the_row();
           // vars
           $name = get_sub_field('feature_name');
           $summary = get_sub_field('feature_summary');
           $icon = get_sub_field('feature_icon');
           $photo = get_sub_field('feature_image');
           $size = 'medium'; // (thumbnail, medium, large, full or custom size)

           if ($photo) {
               $image = wp_get_attachment_image($photo, $size);
           }
           ?>

       <div class="feature">
         <div class="icon">
           <svg class="icon--feature">
             <use xlink:href="#<?php echo $icon; ?>">
           </svg>
         </div>
         <div class="feature__intro">
           <h3 class="feature__title"><?php echo $name; ?></h3>
           <p class="feature__summary"><?php echo $summary; ?></p>
         </div>
         <div class="feature__image">
           <?php echo $image; ?>
         </div>
       </div>

     <?php endwhile; ?>
   </div>
 <?php endif; ?>

</div> <!-- /Page Content -->
</section> <!-- /Main -->


   <?php woo_main_after(); ?>
<?php get_sidebar(); ?>

</div><!-- /#content -->


<?php get_footer(); ?>
