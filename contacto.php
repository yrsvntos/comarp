<?php
/**
 * * * Template Name: Contacto
 * 
 * The template for displaying Contacto page
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
					<h1 class="fw-bold text-center">CONTACTO</h1>
				</div>
			</div>
		</div>
	</section>
	<?php

      endwhile;

    ?>
	<section id="contacto">
		<div class="container">
			<div class="py-5">
				<div class="row">
					<div class="col-md-7 mb-4">
						<h4 class="text-azul-2"><b>Entrar em contacto</b></h4>
						<div action="" class="mt-4">
							<?php 
                                if(is_active_sidebar('sidebar-2')) {
                                    dynamic_sidebar('sidebar-2');
                                }
                            ?>
						</div>
					</div>
					<div class="col-md-5">
						<h4 class="text-azul-2 mb-4"><b>Informações de contacto</b></h4>
						<?php 

					      $args = array( 'post_type' => 'contactos', 'posts_per_page' => 3);
					      $loop = new WP_Query( $args );
					      while ( $loop->have_posts() ) : $loop->the_post();  

					    ?>
						<div class="contacto-localizacao d-flex">
							<div class="text-azul-2" style="font-size: 24px;"><?php echo the_field('icone');?></div>
							<div class="ms-3">
								<h6><b><?php echo the_title(); ?></b></h6>
								<p><?php echo the_field('nome');?></p>
							</div>
						</div>
						<?php

					      endwhile;

					    ?>
						<div class="contacto-redes-sociais mt-2">
							<h4 class="text-azul-2 fw-bold">Siga-nos</h4>
							<div class="redes-sociais d-flex align-items-center mt-3">
								<?php 

							      $args = array( 'post_type' => 'redes_sociais', 'posts_per_page' => 3);
							      $loop = new WP_Query( $args );
							      while ( $loop->have_posts() ) : $loop->the_post();   
							    ?>
								<a href="<?php echo the_field('url'); ?>" class="icon" target="_blank">
	 								<?php echo the_field('icone');?>
	 							</a>
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
