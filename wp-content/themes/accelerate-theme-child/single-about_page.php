
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
				$service_1_title = get_field('content_strategy');
				$service_1_description = get_field('content_strategy_description');
				$image_2 = get_field('image_2');
				$service_2_title = get_field('influencer_mapping');
				$service_2_description = get_field('influencer_mapping_description');
				$image_3 = get_field('image_3');
				$service_3_title = get_field('social_media_strategy');
				$service_3_description = get_field('social_media_strategy_description');
				$image_4 = get_field('image_4');
				$service_4_title = get_field('design_and_development');
				$service_4_description = get_field('design_and_development__description'); ?>

	<?php the_content(); ?>

<article class="services">
	<section class="our-services">
		<h6>Our Services:<?php echo $our_services; ?></h6>
		<p><span class="grey-1">We take pride in our content and the content we create for them.<br> Here is a brief overview of our offered services.</span></p>

			<figure class="service-image-align-left">
				<?php if($image_1){?>
	      	<?php echo wp_get_attachment_image( $image_1, $size ); ?>
       	<?php	} ?>
			</figure>
			<div class= "service-description-left">
				<h5><?php echo $service_1_title ?></h5>
				<p><span class="grey"><?php echo $service_1_description?></span></p>
			</div>

			<figure class="service-image-align-right">
				<?php if($image_2){?>
					<?php echo wp_get_attachment_image( $image_2, $size ); ?>
				<?php	} ?>
			</figure>
			<div class="service-description-right">
				<h5><?php echo $service_2_title; ?></h5>
				<p><span class="grey"><?php echo $service_2_description;?></span></p>
			</div>

			<figure class="service-image-align-left">
				<?php if($image_3){?>
					<?php echo wp_get_attachment_image( $image_3, $size ); ?>
			  <?php	} ?>
			</figure>
			<div class="service-description-left">
				<h5><?php echo $service_3_title; ?></h5>
				<p><span class="grey"><?php echo $service_3_description;?></span></p>
    </div>

			<figure class="service-image-align-right">
				<?php if($image_4){?>
					<?php echo wp_get_attachment_image( $image_4, $size ); ?>
				<?php	} ?>
			</figure>
			<div class="service-description-right">
				<h5><?php echo $service_4_title; ?></h5>
				<p><span class="grey"><?php echo $service_4_description; ?></span></p>
			</div>

	</section> <!-- our services-->
</article><!-- services-->

	<?php endwhile; // end of the loop. ?>

		<div class="working-with-us">
	<a class="button" href="<?php echo home_url(); ?>/blog">Contact Us</a>
		<h6>Interested in working with us?</h6>
    </div>

<?php get_footer(); ?>
