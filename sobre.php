<?php
/**
 * * * Template Name: Sobre nós
 * 
 * The template for displaying Sobre nós page
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
					<h1 class="fw-bold text-center">SOBRE NÓS</h1>
				</div>
			</div>
		</div>
	</section>
	<?php

      endwhile;

    ?>
    <section id="sobre">
		<div class="container">
			<div class="py-5">
				<h2 class="text-laranja fw-bold mb-2">SOBRE EVENTO</h2>
				<div class="row align-items-center">
					<div class="col-md-7">
						<h4 class="fw-bold mb-3">Receba as últimas informações sobre COMARP FORUM</h4>
						<div class="row">
							<div class="col-md-1">
								<div class="icon">
									<i class="fas fa-question"></i>
								</div>
							</div>
							<?php 

						      $args = array( 'post_type' => 'sobre-comarp', 'posts_per_page' => 1);
						      $loop = new WP_Query( $args );
						      while ( $loop->have_posts() ) : $loop->the_post();   
						    ?>
							<div class="col-md-11">
								<h5 class="text-laranja fw-bold">O que é COMARP Forum?</h5>
								<?php echo the_content();?>
							</div>
							<?php

						      endwhile;

						    ?>
						</div>
					</div>
					<div class="col-md-5">
						<img src="<?php echo get_template_directory_uri();?>/img/logo/main-logo.png" alt="" style="width: 100%;">
					</div>
				</div>
				<div class="row mt-5">
					<?php 

				      $args = array( 'post_type' => 'sobre-comarp', 'posts_per_page' => 1);
				      $loop = new WP_Query( $args );
				      while ( $loop->have_posts() ) : $loop->the_post();   
				    ?>
					<div class="col-md-4 mb-4">
						<div class="msv-box p-4">
							<h5 class="text-laranja">#Missão</h5>
							<small class="text-white">
								<?php echo the_field('missao');?>
							</small>
						</div>
					</div>
					<div class="col-md-4 mb-4">
						<div class="msv-box p-4">
							<h5 class="text-laranja">#Visão</h5>
							<small class="text-white">
								<?php echo the_field('visao');?>
							</small>
						</div>
					</div>
					<div class="col-md-4 mb-4">
						<div class="msv-box p-4">
							<h5 class="text-laranja">#Valores</h5>
							<small class="text-white">
								<?php echo the_field('valores');?>
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
	<section id="grupo-alvo" class="bg-gradiente">
		<div class="container">
			<div class="py-5">
				<div class="row">
					<?php 

				      $args = array( 'post_type' => 'sobre-comarp', 'posts_per_page' => 1);
				      $loop = new WP_Query( $args );
				      while ( $loop->have_posts() ) : $loop->the_post();   
				    ?>
					<div class="col-md-6 border-rights">
						<h4 class="fw-bold text-laranja">Objectivos</h4>
						<p><?php echo the_field('objectivo');?></p>
					</div>
					<div class="col-md-6">
						<h4 class="fw-bold text-laranja">Grupo alvo</h4>
						<p><?php echo the_field('grupo-alvo');?></p>
					</div>
					<?php

				      endwhile;

				    ?>
				</div>
			</div>
		</div>
	</section>	
	<section id="escopo" class="bg-white">
		<div class="container">
			<div class="py-5">
				<h1 class="text-center">Escopo</h1>
				<h4 class="text-laranja text-center">#escopo</h4>
				<div class="oradores-box mt-5">
					<?php 

				      $args = array( 'post_type' => 'escopo', 'posts_per_page' => 1);
				      $loop = new WP_Query( $args );
				      while ( $loop->have_posts() ) : $loop->the_post();   
				    ?>
					<div class="oradores-img">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" style="width: 100%;">
					</div>
					<?php

				      endwhile;

				    ?>
				</div>
			</div>
		</div>
	</section>
	<section id="oradores" class="bg-white">
		<div class="container">
			<div class="py-5">
				<h1 class="text-center">Oradores</h1>
				<h4 class="text-laranja text-center">#oradores</h4>
				<h5 class="fw-bold text-center">Conheça os nossos membros</h5>
				<div class="oradores-box mt-5">
					<div class="row">
						<?php 

					      $args = array( 'post_type' => 'oradores-comarp', 'posts_per_page' => 1);
					      $loop = new WP_Query( $args );
					      while ( $loop->have_posts() ) : $loop->the_post();   
					    ?>
						<div class="col-md-3">
							<div class="oradores-img">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" style="width: 100%;">
							</div>
							<div class="oradores-content d-flex mt-4">
								<div class="orador-border-laranja"></div>
								<div class="orador-name">
									<h5 class="fw-bold text-azul-2"><?php echo the_title();?></h5>
									<p><?php echo the_content(); ?></p>
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
	<!-- <section id="comarp-numeros" class="bg-azul-secundario">
		<div class="container">
			<div class="py-5">
				<div class="row">
					<?php 

				      $args = array( 'post_type' => 'comarp-numeros', 'posts_per_page' => 4);
				      $loop = new WP_Query( $args );
				      while ( $loop->have_posts() ) : $loop->the_post();

				    ?>
					<div class="col-md-3 mb-4">
						<div class="comarp-box text-center">
							<div class="comarp-icon mb-4">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" style="width: 30%;">
							</div>
							<div class="comarp-content">
								<div class="d-flex fw-bold align-items-center justify-content-center">
									<h3 class="">+</h3>
									<h3 class="fw-bold counter-count"><?php echo the_field('numeros'); ?></h3>
								</div>
								<h6><?php echo the_field('nome');?></h6>
							</div>
						</div>
					</div>
					<?php

				      endwhile;

				    ?>
				</div>
			</div>
		</div>
	</section> -->
	<section id="testemunhos" class="testemunhos bg-white">
		<div class="container">
			<div class="py-5">
				<h1 class="text-center">Testemunhos</h1>
				<h4 class="text-laranja text-center">#testemunho</h4>
				<div class="owl-carousel owl-theme">
					<?php 

				      $args = array( 'post_type' => 'testemunhos');
				      $loop = new WP_Query( $args );
				      while ( $loop->have_posts() ) : $loop->the_post();   

				    ?>
					<div class="testemunho-box text-center">
						<div class="testemunho-img">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" style="width: 6%; margin: auto;">
						</div>
						<div class="testemunho-name my-3">
							<h5 class="text-azul fw-bold"><?php echo the_field('nome');?></h5>
							<small style="color: #888888;"><?php echo the_field('profissao');?></small>
						</div>
						<div class="testemunho-content">
							<p class="text-center"><?php echo the_field('conteudo');?></p>
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
