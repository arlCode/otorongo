<?php
if (! defined('ABSPATH')) {
    exit;
}
/**
 * Single Post Template
 *
 * This template is the default page template. It is used to display content when someone is viewing a
 * singular view of a post ('post' post_type).
 * @link http://codex.wordpress.org/Post_Types#Post
 *
 * @package WooFramework
 * @subpackage Template
 */
    get_header();
    global $woo_options;

/**
 * The Variables
 *
 * Setup default variables, overriding them if the "Theme Options" have been saved.
 */

    $settings = array(
                    'thumb_single' => 'false',
                    'single_w' => 200,
                    'single_h' => 200,
                    'thumb_single_align' => 'alignleft',
                    'gallery_meta_enable' => 'true'
                    );

    $settings = woo_get_dynamic_values($settings);
?>

    <div id="content" class="col-full two-col">

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

					<?php echo woo_embed('width=580'); ?>

					<?php if (has_post_format('gallery')) {
                        ?>
		            	<a href="<?php echo esc_url(get_post_format_link('gallery')); ?>" title="<?php esc_attr_e('Click here to view our gallery', 'woothemes'); ?>" class="button view-all"><?php _e('View All Galleries', 'woothemes'); ?></a>
		            <?php

                    } ?>
	                <header>

		                <h2><?php the_title(); ?></h2>

                    	<?php woo_post_meta(); ?>

	                </header>

	                <section class="entry fix">
										<div class="featured-image">
										  <?php if (has_post_thumbnail()) : ?>
										      <?php the_post_thumbnail('small'); ?>
										  <?php endif; ?>
										</div>

						<?php the_content(); ?>
						<?php wp_link_pages(array( 'before' => '<div class="page-link">' . __('Pages:', 'woothemes'), 'after' => '</div>' )); ?>

					</section>

					<?php the_tags('<p class="tags">'.__('Tags: ', 'woothemes'), ', ', '</p>'); ?>

				</div><!-- .inner -->

            </article><!-- .post -->

				<?php woo_subscribe_connect(); ?>

	        <nav id="post-entries" class="fix">
	            <div class="nav-prev fl"><?php previous_post_link('%link', '<span class="meta-nav">&larr;</span> %title'); ?></div>
	            <div class="nav-next fr"><?php next_post_link('%link', '%title <span class="meta-nav">&rarr;</span>'); ?></div>
	        </nav><!-- #post-entries -->
            <?php
                // Determine wether or not to display comments here, based on "Theme Options".
                if (isset($woo_options['woo_comments']) && in_array($woo_options['woo_comments'], array( 'post', 'both' ))) {
                    comments_template();
                }
                } // End WHILE Loop
            } else {
                ?>
			<article <?php post_class(); ?>>
            	<p><?php _e('Sorry, no posts matched your criteria.', 'woothemes'); ?></p>
			</article><!-- .post -->
       	<?php

            } ?>

		</section><!-- #main -->

		<?php woo_main_after(); ?>

        <?php get_sidebar(); ?>

    </div><!-- #content -->

<?php get_footer(); ?>
