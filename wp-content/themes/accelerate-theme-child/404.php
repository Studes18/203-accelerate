<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

<section class="error-section">
  <div class="error-display">
    <h1>404</h1>
    <h2>So close yet So far...</h2>
    <p id="correction">The page you are looking for doesn't exist.<br> Let's get you back to the clubhouse</p>
    <p class="button"><a href="<?php echo home_url(); ?>">Home ›</a></p>
  </div>
</section>
	</div><!-- #primary -->
		<?php get_footer(); ?>
