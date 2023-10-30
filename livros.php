<?php
/**
 * * * Template Name: Livros
 * 
 * The template for displaying Livros page
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
					<h1 class="fw-bold text-center">LIVROS</h1>
				</div>
			</div>
		</div>
	</section>
	<?php

      endwhile;

    ?>
	<section id="livros" class="bg-cinza">
		<div class="container">
			<div class="py-5">
				<h1 class="text-center">Livros</h1>
				<h4 class="text-laranja text-center">#Livros</h4>
				<div class="row mt-2">
					<?php 

				      $args = array( 'post_type' => 'livros-comarp');
				      $loop = new WP_Query( $args );
				      while ( $loop->have_posts() ) : $loop->the_post(); 

				    ?>
					<div class="col-md-2">
						<div class="livros-box bg-white p-2 rounded-3">
							<div class="livro-img mb-3">
								<img class="shadow" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" style="width: 100%; object-fit: cover; height: 212px;">
							</div>
							<h6 class="fw-bold mt-2"><?php echo the_title(); ?></h6>
							<small class="text-laranja"><?php echo the_field('autor'); ?></small>
							<hr>
							<small class="livro-download d-flex justify-content-between">
								<a href="<?php echo the_field('url');?>" class="text-azul-2">
									Ver&nbsp;&nbsp;<i class="fas fa-eye text-laranja"></i>
								</a>
								<a href="<?php echo the_field('url');?>" class="text-azul-2">
									Download&nbsp;&nbsp;<i class="fas fa-download text-laranja"></i>
								</a>
							</small>
						</div>
					</div>
					<?php

				      endwhile;

				    ?>	
				</div>
			</div>
		</div>
	</section>
<?php

get_footer();
