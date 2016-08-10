<?php
/**
 * The template for displaying the 404 page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
get_header(); ?>

<section class="error-page">
	<div class="error-page-content">
		<h2>Oops!</h2>
		<h6>We can't find that!</h6>
		<a class="button" href="<?php echo home_url(); ?>/blog">Home</a>
	</div><!--404-content-->
	<div class="error-page-image">
	</div>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php endwhile; // end of the loop. ?>
</section><!-- .404-page -->

<?php get_footer(); ?>
