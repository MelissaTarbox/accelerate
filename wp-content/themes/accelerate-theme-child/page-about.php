
<?php
/**
 * The template for displaying About Page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
<section class="page-about">
	<div class="site-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- site-content -->
	</section><!--about-page-->

<?php get_footer(); ?>
