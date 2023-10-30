<?php
/**
 * The main template file
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

<main>
	<?php 

      $args = array( 'post_type' => 'banner', 'posts_per_page' => 1);
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();   
    ?>
	<section id="banner" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);">
		<div class="overlay flex-center">
			<div class="container">
				<div class="py-5">
					<div class="banner-content m-auto">
						<div class="banner-title text-center p-4 rounded-3 bg-white mb-5">
							<h1 class="text-azul"><?php echo the_title(); ?></h1>
						</div>
						<div class="banner-footer text-center">
							<h5 class="fw-bold"><?php echo the_field('datas');?></h5>
						</div>
					</div>
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
				<?php 

			      $args = array( 'post_type' => 'sobre-comarp', 'posts_per_page' => 1);
			      $loop = new WP_Query( $args );
			      while ( $loop->have_posts() ) : $loop->the_post();   
			    ?>
				<div class="row mb-4">
					<div class="col-md-5 d-md-block d-none">
						<div class="sobre-comarp">
							<div class="sobre-comarp-box-one rounded-3"></div>
							<div class="sobre-comarp-box-two bg-azul-secundario rounded-3">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" style="width: 75%; margin: 0 auto;">
							</div>
							<div class="sobre-comarp-box-three rounded-3"></div>
						</div>
					</div>
					<div class="col-md-7">
						<h3 class="text-laranja fw-bold"><?php echo the_title(); ?></h3>
						<p><?php echo the_content();?></p>
						<p><?php echo the_field('objectivo');?></p>
					</div>
				</div>
				<?php

			      endwhile;

			    ?>
				<div class="row mt-5">
					<?php 

				      $args = array( 'post_type' => 'comarp-numeros', 'posts_per_page' => 4);
				      $loop = new WP_Query( $args );
				      while ( $loop->have_posts() ) : $loop->the_post();

				    ?>
					<div class="col-md-3 mb-4">
						<div class="comarp-box d-flex align-items-center p-3 rounded-3 shadow">
							<div class="comarp-icon">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
							</div>
							<div class="comarp-content text-laranja">
								<div class="d-flex fw-bold align-items-center">
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
					<!-- <div class="col-md-3 mb-4">
						<div class="comarp-box d-flex align-items-center p-3 rounded-3 shadow">
							<div class="comarp-icon">
								<img src="<?php echo get_template_directory_uri();?>/img/icones/004.png" alt="">
							</div>
							<div class="comarp-content text-laranja">
								<h3 class="fw-bold counter-count">+10</h3>
								<h6>Oradores</h6>
							</div>
						</div>
					</div>
					<div class="col-md-3 mb-4">
						<div class="comarp-box d-flex align-items-center p-3 rounded-3 shadow">
							<div class="comarp-icon">
								<img src="<?php echo get_template_directory_uri();?>/img/icones/003.png" alt="">
							</div>
							<div class="comarp-content text-laranja">
								<h3 class="fw-bold counter-count">+5</h3>
								<h6>Empresas</h6>
							</div>
						</div>
					</div>
					<div class="col-md-3 mb-4">
						<div class="comarp-box d-flex align-items-center p-3 rounded-3 shadow">
							<div class="comarp-icon">
								<img src="<?php echo get_template_directory_uri();?>/img/icones/002.png" alt="">
							</div>
							<div class="comarp-content text-laranja">
								<h3 class="fw-bold counter-count">+10</h3>
								<h6>Expositores</h6>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<section id="oradores" class="bg-azul-secundario">
		<div class="container">
			<div class="py-5">
				<div class="oradores-title flex-center">
					<h3 class="fw-bold text-white">ORADORES</h3>
					<a href="#" class="text-white">Ver todos&nbsp;&nbsp;<i class="fas fa-angle-right"></i></a>
				</div>
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
									<a href="<?php echo the_field('link_do_facebook');?>" class="icon">
										<i class="fab fa-facebook-f"></i>
									</a>
									<a href="<?php echo the_field('link_do_linkedin');?>" class="icon">
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
	<section id="programa">
		<div class="container">
			<div class="py-5">
				<div class="programa-title flex-center">
					<h3 class="fw-bold text-laranja">PROGRAMA</h3>
				</div>
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
					<div class="d-flex justify-content-center mt-5">
						<a href="#" class="btn btn-comarp-azul-2"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ver mais">Ver mais</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="patrocinadores">
		<div class="container">
			<div class="py-5">
				<div class="organizacao-content">
					<div class="row align-items-center">
						<div class="col-md-12">
							<h3 class="fw-bold text-laranja">ORGANIZAÇÃO</h3>
						</div>
						<div class="">
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
						<div class="col-md-12">
							<h3 class="fw-bold text-laranja text-center">PARCEIROS ACADÊMICOS</h3>
						</div>
						<div class="">
							<div class="row">
								<?php 

							      $args = array( 'post_type' => 'parceiros-comarp', 'posts_per_page' => 4);
							      $loop = new WP_Query( $args );
							      while ( $loop->have_posts() ) : $loop->the_post();   
							    ?>
								<div class="col-md-2">
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
	<section id="reserva" class="bg-azul-secundario">
		<div class="container">
			<div class="py-5">
				<div class="row align-items-center">
					<div class="col-md-6 mb-4">
						<?php 

					      $args = array( 'post_type' => 'reserva', 'posts_per_page' => 1);
					      $loop = new WP_Query( $args );
					      while ( $loop->have_posts() ) : $loop->the_post();   
					    ?>
						<p><?php echo the_field('data'); ?></p>
						<h4 class=""><?php echo the_title(); ?></h4>
						<p><?php echo the_content(); ?></p>
						<?php

					      endwhile;

					    ?>
						<div class="main-counter contagem">
						  	<div class="d-flex countdown pt-3">
							    <div class="reserva-count text-center">
							      	<div class="number dias"></div>
							      	<div class="">Dias</div>
							    </div>
							    <div class="dois-pontos">:</div>
							    <div class="reservas-count text-center">
							      	<div class="number horas "></div>
							      	<div class="">Horas</div>
							    </div>
							    <div class="dois-pontos">:</div>
							    <div class="reservas-count text-center">
							      	<div class="number minutos "></div>
							      	<div class="">Minutos</div>
							    </div>
							    <div class="dois-pontos">:</div>
							    <div class="reservas-count text-center">
							      	<div class="number segundos "></div>
							      	<div class="">Segundos</div>
							    </div>
						  	</div>
							<hr>
						</div>
						<div class="reserva-contacto pt-1">
							<h6><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;<a href="tel:+258 871234567" style="color: #fff;">+258 871234567</a></h6>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-box bg-white p-4 rounded-3">
							<h4><strong>Preencha o formulário</strong></h4>
							<div class="mt-3">
								<?php 
	                                if(is_active_sidebar('sidebar-4')) {
	                                    dynamic_sidebar('sidebar-4');
	                                }
	                            ?>
							</div>
						</div>
					</div>						
				</div>
			</div>
		</div>
	</section>	
	<section id="blog">
		<div class="container">
			<div class="py-5">
				<div class="blog-title flex-center">
					<h3 class="fw-bold text-laranja">NOTÍCIAS</h3>
					<a href="#" class="text-laranja">Ver todas&nbsp;&nbsp;<i class="fas fa-angle-right"></i></a>
				</div>
				<div class="blog-content mt-4">
					<div class="row">
						<?php 

                          $args = array( 'post_type' => 'post', 'posts_per_page' => 3);
                          $loop = new WP_Query( $args );
                          while ( $loop->have_posts() ) : $loop->the_post();


                           $string = the_title('','',false);
                           if (strlen($string) > 45) {
                               $stringCut = substr($string, 0, 35);// change 15 top what ever text length you want to show.
                               $endPoint = strrpos($stringCut, ' ');
                               $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                               $string .= ' [...]';
                           }
                           
                        ?>
						<div class="col-md-4">
							<div class="blog-box shadow  rounded-bottom">
								<div class="blog-img">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" style="width: 100%;">
								</div>
								<div class="blog-info p-3">
									<div class="blog-user flex-center">
										<span><i class="fas fa-user me-2"></i>Comarp Forum</span>
										<span><i class="fas fa-calendar-alt me-2"></i><?php the_time('d.m.y');?></span>
									</div>
									<div class="blog-news mt-3">
										<h5 class="text-azul fw-bold mb-3"><?php the_title(); ?></h5>
										<a href="<?php the_permalink() ?>" class="btn btn-sm btn-comarp-azul-2"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ler mais">Ler mais</a>
									</div>
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
</main>

<?php

get_footer();
