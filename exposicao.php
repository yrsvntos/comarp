<?php
/**
 * * * Template Name: Exposição
 * 
 * The template for displaying Exposição page
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
					<h1 class="fw-bold text-center">EXPOSIÇÃO</h1>
				</div>
			</div>
		</div>
	</section>
	<?php

      endwhile;

    ?>
	<section id="pacotes" class="bg-white">
		<div class="container">
			<div class="py-5">
				<h1 class="text-center">Pacotes</h1>
				<h4 class="text-laranja text-center">#pacotes</h4>
				<div class="exposicao-box mt-3">
					<ul class="nav nav-pills justify-content-center mb-3 borda-ativa" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
						    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Participação</button>
						    <div class=""></div>
						</li>
						<li class="nav-item" role="presentation">
						    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Exposição</button>
						</li>
						<li class="nav-item" role="presentation">
						    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Patrocinio</button>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
					  	<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
					  	<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
					  	<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="exposicao-box text-center bg-azul text-white p-3 rounded-3">
								<div class="exposicao-header mb-4">
									<h5 class="fw-bold text-white"><?php echo the_field('nome');?></h5>
									<div class="bord-inferior"></div>
								</div>
								<div class="exposicao-content text-start">
									<?php echo the_field('beneficios');?>
								</div>
								<div class="exposicao-preco my-3">
									<h5 class="fw-bold text-laranja text-shadow"><?php echo the_field('preco');?><sub class="text-sm"> MZN</sub></h5>
								</div>	
								<!-- Button trigger modal -->
								<a class="btn btn-sm bg-white" data-bs-toggle="modal" data-bs-target="#static">
								  Reservar
								</a>

								<!-- Modal -->
								<div class="modal fade" id="static" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered">
									    <div class="modal-content">
										    <div class="modal-header">
										        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
										        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										    </div>
										    <div class="modal-body">
										        ...
										    </div>
									    </div>
									</div>
								</div>														
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    
<?php

get_footer();
