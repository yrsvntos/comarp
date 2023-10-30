<?php
/**
 * * * Template Name: Artigos
 * 
 * The template for displaying Artigos page
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
					<h1 class="fw-bold text-center">ARTIGOS</h1>
				</div>
			</div>
		</div>
	</section>
	<?php

      endwhile;

    ?>
	<section id="artigos" class="bg-cinza">
		<div class="container">
			<div class="py-5">
				<h1 class="text-center">Artigos</h1>
				<h4 class="text-laranja text-center">#Artigos</h4>
				<div class="table-responsive-md">
				    <table id="example" class="table table-striped bg-white" style="width:100%">
				        <thead>
				            <tr>
				                <th>Nome do documento</th>
				                <th>Autor</th>
				                <th>Categoria</th>
				                <th>Formato</th>
				                <th class="text-end">Ações</th>
				            </tr>
				        </thead>
				        <tbody>
				        	<?php 

		                      $args = array( 'post_type' => 'artigos-comarp');
		                      $loop = new WP_Query( $args );
		                      while ( $loop->have_posts() ) : $loop->the_post();

		                            
		                    ?>
				            <tr>
				                <td><?php echo the_field('nome'); ?></td>
				                <td><?php echo the_field('autor'); ?></td>
				                <td><?php echo the_field('categoria'); ?></td>
				                <td><?php echo the_field('formato'); ?></td>
				                <td class="text-end">
				                	<a href="<?php echo the_field('url'); ?>" target="_blank" class="btn btn-apiex-vermelho btn-sm">Download</a>
				                </td>
				            </tr>
				           	 <?php

		                      endwhile;

		                    ?>
				        </tbody>
				    </table>
				</div>
			</div>
		</div>
	</section>
<?php

get_footer();
