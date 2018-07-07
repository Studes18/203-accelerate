<?php
/**
 * The template for displaying the about page
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

	<div id="primary" class="about-page hero-content site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

	<article class="services-list">
		<section id="about-services">
				<h4>Our Services</h4>
				<p>We take pride in our clients and the content we create for them.</br>
					Here’s a brief overview of our offered services.</p>
		</section>
		<section class= "services">
			 		<?php while ( have_posts() ) : the_post();
			 			$size = "medium";
			 			$image_1 = get_field('services_image_1');
			 			$title_1 = get_field('services_title_1');
			 			$description_1 = get_field('services_description_1');
						$image_2 = get_field('services_image_2');
						$title_2 = get_field('services_title_2');
						$description_2 = get_field('services_description_2');
						$image_3 = get_field('services_image_3');
						$title_3 = get_field('services_title_3');
						$description_3 = get_field('services_description_3');
						$image_4 = get_field('services_image_4');
						$title_4 = get_field('services_title_4');
						$description_4 = get_field('services_description_4');
			  	?>
				<section class="services-items clearfix">
					<div class="services-image">
						<p><?php echo wp_get_attachment_image( $image_1, $size ); ?></p>
					</div>
					<aside class="services-about">
						<h3><?php echo $title_1 ?></h3>
						<p><?php echo $description_1 ?></p>
					</aside>
				</section>

				<section class="services-items clearfix">
					<div class="services-image">
						<p><?php echo wp_get_attachment_image( $image_2, $size ); ?></p>
					</div>
					<aside class="services-about closer">
						<h3><?php echo $title_2 ?></h3>
						<p><?php echo $description_2 ?></p>
					</aside>
				</section>

				<section class="services-items clearfix">
					<div class="services-image">
						<p><?php echo wp_get_attachment_image( $image_3, $size ); ?></p>
					</div>
					<aside class="services-about">
						<h3><?php echo $title_3 ?></h3>
						<p><?php echo $description_3 ?></p>
					</aside>
				</section>

				<section class="services-items clearfix">
					<div class="services-image">
						<p><?php echo wp_get_attachment_image( $image_4, $size ); ?></p>
					</div>
					<aside class="services-about">
						<h3><?php echo $title_4 ?></h3>
						<p><?php echo $description_4 ?></p>
					</aside>
				</section>

	     <?php endwhile; ?>
	    <?php wp_reset_query(); ?>
		</section>

		<section class="about-contact">
		 <h2>Interested in working with us?
		 <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a> </h2>
	 </section>
	 </article>



		<?php get_footer(); ?>
