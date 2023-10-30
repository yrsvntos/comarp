<?php
/**
 * * * Template Name: Oradores
 * 
 * The template for displaying Oradores page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package COMARP
 */

get_header();
?>
	<?php 

      $args = array( 'post_type' => 'banner-single', 'posts_per_page' => 1);
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();   
    ?>
	<section id="banner-single" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);">
		<div class="overlay flex-center">
			<div class="container">
				<div class="py-5">
					<h1 class="fw-bold text-center">ORADORES</h1>
				</div>
			</div>
		</div>
	</section>
	<?php

      endwhile;

    ?>
    <section id="oradores" class="bg-white">
		<div class="container">
			<div class="py-5">
				<h1 class="text-center">Oradores</h1>
				<h4 class="text-laranja text-center">#oradores</h4>
				<div class="oradores-box mt-5">
					<div class="row">
						<?php 

					      $args = array( 'post_type' => 'oradores-comarp', 'posts_per_page' => 1);
					      $loop = new WP_Query( $args );
					      while ( $loop->have_posts() ) : $loop->the_post();   
					    ?>
						<div class="col-md-3">
							<div class="oradores-box text-center">
								<div class="oradores-img mb-4">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
								</div>
								<div class="oradores-content d-flex justify-content-center">
									<div class="orador-name">
										<h5 class="fw-bold text-laranja"><?php echo the_title();?></h5>
										<small class="fw-light"><?php echo the_content(); ?></small>
									</div>
								</div>
								<div class="orador-redes-sociais d-flex justify-content-center">
									<a href="<?php echo the_field('link_do_facebook');?>" class="icone">
										<i class="fab fa-facebook-f"></i>
									</a>
									<a href="<?php echo the_field('link_do_linkedin');?>" class="icone">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</div>
							</div>
						</div>
						<?php

					      endwhile;

					    ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php

get_footer();
