<?php
/**
 * * * Template Name: Programa
 * 
 * The template for displaying Programa page
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
					<h1 class="fw-bold text-center">PATROCINADORES</h1>
				</div>
			</div>
		</div>
	</section>
	<?php

      endwhile;

    ?>
   <section id="patrocinadores">
		<div class="container">
			<div class="py-5">
				<div class="organizacao-content">
					<div class="row align-items-center">
						<div class="col-md-5">
							<h3 class="fw-bold text-laranja">ORGANIZAÇÃO</h3>
						</div>
						<div class="col-md-7">
							<?php 

						      $args = array( 'post_type' => 'organizador-comarp', 'posts_per_page' => 1);
						      $loop = new WP_Query( $args );
						      while ( $loop->have_posts() ) : $loop->the_post();   
						    ?>
							<div class="col-md-3">
								<div class="patrocinadores">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
								</div>
							</div>
							<?php

						      endwhile;

						    ?>
						</div>
					</div>
				</div>
				<div class="border-bottom my-3"></div>
				<div class="patrocinadores-content">
					<div class="row align-items-center">
						<div class="col-md-5">
							<h3 class="fw-bold text-laranja">APOIO</h3>
						</div>
						<div class="col-md-7">
							<div class="row">
								<?php 

							      $args = array( 'post_type' => 'apoio-comarp', 'posts_per_page' => 2);
							      $loop = new WP_Query( $args );
							      while ( $loop->have_posts() ) : $loop->the_post();   
							    ?>
								<div class="col-md-3">
									<div class="patrocinadores">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
									</div>
								</div>
								<?php

							      endwhile;

							    ?>
							</div>
						</div>
					</div>
				</div>
				<div class="border-bottom my-3"></div>
				<div class="parceiros-content">
					<div class="row align-items-center">
						<div class="col-md-5">
							<h3 class="fw-bold text-laranja">PARCEIROS ACADÊMICOS</h3>
						</div>
						<div class="col-md-7">
							<div class="row">
								<?php 

							      $args = array( 'post_type' => 'parceiros-comarp', 'posts_per_page' => 4);
							      $loop = new WP_Query( $args );
							      while ( $loop->have_posts() ) : $loop->the_post();   
							    ?>
								<div class="col-md-3">
									<div class="patrocinadores">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
									</div>
								</div>
								<?php

							      endwhile;

							    ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php

get_footer();
