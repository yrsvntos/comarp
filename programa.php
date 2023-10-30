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
					<h1 class="fw-bold text-center">PROGRAMA</h1>
				</div>
			</div>
		</div>
	</section>
	<?php

      endwhile;

    ?>
    <section id="programa">
		<div class="container">
			<div class="py-5">
				<h1 class="text-center">Programa</h1>
				<h4 class="text-laranja text-center">#programa</h4>
				<div class="programa-content">
					<ul class="nav nav-pills my-4 justify-content-center" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
						    <button class="nav-link active btn-sm" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Painel 1</button>
						</li>
						<li class="nav-item ms-5" role="presentation">
						    <button class="nav-link btn-sm" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Painel 2</button>
						</li>
						<li class="nav-item ms-5" role="presentation">
						    <button class="nav-link btn-sm" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Painel 3</button>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
					  	<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					  		<h3 class="fw-bold text-azul-2">Tema: Comunicação</h3>
					  		<div class="programa-box bg-white px-4 py-3 shadow mt-4">
					  			<?php 

							      $args = array( 'post_type' => 'painel_1',);
							      $loop = new WP_Query( $args );
							      while ( $loop->have_posts() ) : $loop->the_post();   
							    ?>
					  			<div class="sub-tema">
						  			<div class="programa-hora mb-3">
						  				<small><i class="far fa-clock text-azul-2"></i>&nbsp;&nbsp;<?php echo the_field('inicio');?> - <?php echo the_field('termino'); ?></small>
						  			</div>
						  			<div class="programa-content">
						  				<h6><?php echo the_title(); ?></h6>
						  			</div>
					  			</div>
					  			<?php

							      endwhile;

							    ?>
					  		</div>
					  	</div>
					  	<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					  		<h3 class="fw-bold text-azul-2">Tema: Marketing</h3>
					  		<div class="programa-box bg-white px-4 py-3 shadow mt-4">
					  			<?php 

							      $args = array( 'post_type' => 'painel_2',);
							      $loop = new WP_Query( $args );
							      while ( $loop->have_posts() ) : $loop->the_post();   
							    ?>
					  			<div class="sub-tema">
						  			<div class="programa-hora mb-3">
						  				<small><i class="far fa-clock text-azul-2"></i>&nbsp;&nbsp;<?php echo the_field('inicio');?> - <?php echo the_field('termino'); ?></small>
						  			</div>
						  			<div class="programa-content">
						  				<h6><?php echo the_title(); ?></h6>
						  			</div>
					  			</div>
					  			<?php

							      endwhile;

							    ?>
					  		</div>
					  	</div>
					  	<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
					  		<h3 class="fw-bold text-azul-2">Tema: Relações públicas</h3>
					  		<div class="programa-box bg-white px-4 py-3 shadow mt-4">
					  			<?php 

							      $args = array( 'post_type' => 'painel_3',);
							      $loop = new WP_Query( $args );
							      while ( $loop->have_posts() ) : $loop->the_post();   
							    ?>
					  			<div class="sub-tema">
						  			<div class="programa-hora mb-3">
						  				<small><i class="far fa-clock text-azul-2"></i>&nbsp;&nbsp;<?php echo the_field('inicio');?> - <?php echo the_field('termino'); ?></small>
						  			</div>
						  			<div class="programa-content">
						  				<h6><?php echo the_title(); ?></h6>
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
