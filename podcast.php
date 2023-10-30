<?php
/**
 * * * Template Name: Podcast 
 * 
 * The template for displaying Podcast  page
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

      $args = array( 'post_type' => 'banner-podcast', 'posts_per_page' => 1);
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();   
    ?>
	<section id="banner-podcast" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);">
		<div class="overlay flex-center">
			<div class="container">
				<div class="py-5">
					<div class="row align-items-center">
						<div class="col-md-5 d-md-block d-none">
							<h4 class="fw-bold mb-3">Não perca vários temas sobre Comunicação, Marketing e Relações Públicas trazidos a si pela COMARP Forum</h4>
							<p><i class="fas fa-microphone"></i>&nbsp;Todas as quintas-feiras pelas 19:00H, acompanhe os nossos webinars.</p>
							<hr>
							<a href="#" class="text-white" target="_blank">
								<i class="fab fa-soundcloud"></i>
							</a>
						</div>
						<div class="col-lg-7 col-md-12">
							<a class="btn btn-comarp-laranja btn-sm">
								<?php echo the_field('numero_do_episodio');?>
							</a>
							<h3 class="fw-bold mt-3" style="line-height: 2.6rem"><?php echo the_title();?> - <span class="text-laranja"><?php echo the_field('convidado');?></span></h3>
							<p><?php echo the_content(); ?></p>
							<div class="d-flex font">
								<div class="hora">
									<i class="far fa-clock"></i>&nbsp;<?php echo the_field('hora');?>
								</div>
								<div class="data mx-3">
									<i class="fas fa-calendar-alt"></i>&nbsp;<?php echo the_field('data');?>
								</div>
								<div class="plataform">
									<i class="fas fa-video"></i>&nbsp;ZOOM
								</div>
							</div>
						</div>
					</div>											
				</div>
			</div>
		</div>
	</section>
	<?php

      endwhile;

    ?>
    <section id="podcast">
    	<div class="container">
    		<div class="py-5">
    			<h1 class="text-center">Podcast</h1>
				<h4 class="text-laranja text-center">#Podcast</h4>
				<div class="podcast-content">
					<div class="row">
						<?php 

					      $args = array( 'post_type' => 'podcast-comarp');
					      $loop = new WP_Query( $args );
					      while ( $loop->have_posts() ) : $loop->the_post(); 

					    ?>
						<div class="col-md-4">
							<iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="<?php echo the_field('url');?>"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/erufai" title="Erufai" target="_blank" style="color: #cccccc; text-decoration: none;">Erufai</a> · <a href="https://soundcloud.com/erufai/episodio-1-storytelling-aplicado-ao-trabalho-humanitario-e-desenvolvimento" title="Episodio 1: Storytelling aplicado ao Trabalho Humanitário e Desenvolvimento - Mauro Manhiça" target="_blank" style="color: #cccccc; text-decoration: none;"><?php echo the_field('numero_do_episodio');?> : <?php echo the_title(); ?> - <?php echo the_field('convidado');?></a>
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
