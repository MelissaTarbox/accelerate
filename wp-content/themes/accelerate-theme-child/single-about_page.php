
<?php
/**
 * The template for displaying About Page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
<section class="page-about-header">
	<div class="about-header">
				<div class="about-hero">
					<p><span class="green">Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</p>
        </div>
			</div><!-- about header -->
		</section><!--about-page-header-->

				<?php while ( have_posts() ) : the_post();
				$size = "full";
				$our_services = get_field('our_services');
				$image_1 = get_field('image_1');
				$content_strategy = get_field('content_strategy');
				$image_2 = get_field('image_2');
				$influencer_mapping = get_field('influencer_mapping');
				$image_3 = get_field('image_3');
				$social_media_strategy = get_field('social_media_strategy');
				$image_4 = get_field('image_4');
				$design_and_development = get_field('design_and_development'); ?>

<article class="services">
	<h6>Our Services:<?php echo $our_services; ?></h6>
	<p><span class="grey-1">We take pride in our content and the content we create for them. Here is a brief overview of our offered services.</span></p>

	<div class="our-services">

				<?php if($image_1){?>
	      	<?php echo wp_get_attachment_image( $image_1, $size ); ?>
       	<?php	} ?>
				<h5>Content Strategy: <?php echo $content_strategy; ?></h5>
				<p><span class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non eleifend neque. Maecenas tempor sagittis velit sit amet auctor. Etiam dictum auctor tempor. Quisque vestibulum dui quis blandit pretium. Cras ac arcu augue. Etiam id nisl ac tellus dapibus malesuada eu in orci. Sed vulputate convallis nibh, eget.</span></p>

				<?php if($image_2){?>
					<?php echo wp_get_attachment_image( $image_2, $size ); ?>
				<?php	} ?>
				<h5>influencer Mapping: <?php echo $influencer_mapping; ?></h5>
				<p><span class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non eleifend neque. Maecenas tempor sagittis velit sit amet auctor. Etiam dictum auctor tempor. Quisque vestibulum dui quis blandit pretium. Cras ac arcu augue. Etiam id nisl ac tellus dapibus malesuada eu in orci. Sed vulputate convallis nibh, eget.</span></p>

				<?php if($image_3){?>
					<?php echo wp_get_attachment_image( $image_3, $size ); ?>
			  <?php	} ?>
				<h5>Social Media Strategy: <?php echo $social_media_strategy; ?></h5>
				<p><span class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non eleifend neque. Maecenas tempor sagittis velit sit amet auctor. Etiam dictum auctor tempor. Quisque vestibulum dui quis blandit pretium. Cras ac arcu augue. Etiam id nisl ac tellus dapibus malesuada eu in orci. Sed vulputate convallis nibh, eget.</span></p>

				<?php if($image_4){?>
					<?php echo wp_get_attachment_image( $image_4, $size ); ?>
				<?php	} ?>
				<h5>Design &amp; Development: <?php echo $design_and_development; ?></h5>
				<p><span class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non eleifend neque. Maecenas tempor sagittis velit sit amet auctor. Etiam dictum auctor tempor. Quisque vestibulum dui quis blandit pretium. Cras ac arcu augue. Etiam id nisl ac tellus dapibus malesuada eu in orci. Sed vulputate convallis nibh, eget.</span></p>

	<?php the_content(); ?>

   </div>
</article>


			<?php endwhile; // end of the loop. ?>

		<div class="working-with-us">
	<a class="button" href="<?php echo home_url(); ?>/blog">Contact Us</a>
		<h6>Interested in working with us?</h6>
</div>
<?php get_footer(); ?>
