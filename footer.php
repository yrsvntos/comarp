<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package COMARP
 */

?>

	<footer id="footer" class="bg-azul-secundario">
     	<div class="container">
     		<div class="py-5">
     			<div class="row mb-4">
     				<div class="col-md-6">
     					<h4>INSCREVA-SE NA NOSSA NEWSLETTER</h4>
     					<p>E esteja sempre a par das nossas últimas notícias e conferências.</p>
     				</div>
     				<div class="col-md-6">
     					<div class="newsletter bg-white p-1 rounded-3">
     						<?php 
                                if(is_active_sidebar('sidebar-3')) {
                                    dynamic_sidebar('sidebar-3');
                                }
                            ?>
     					</div>
     				</div>
     			</div>
     			<hr>
     			<div class="row mt-5 mb-3">
     				<div class="col-md-4 mb-3">
     					<?php 

					      $args = array( 'post_type' => 'sobre-comarp', 'posts_per_page' => 1);
					      $loop = new WP_Query( $args );
					      while ( $loop->have_posts() ) : $loop->the_post();   
					    ?>
     					<div class="comarp-sobre-footer">
     						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" style="width: 70%;" class="mb-2">
     						<p><?php echo the_field('objectivo');?></p>
     					</div>
     					<?php

					      endwhile;

					    ?>
 						<div class="d-flex mt-4">
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
     				<div class="col-md-4 mb-3">
     					<h4>Links Úteis</h4>
     					<div class="border-footer-title mb-5"></div>
     					<ul>
     						<li>Início</li>
     						<li>Sobre nós</li>
     						<li>Notícias</li>
     						<li>Contacto</li>
     					</ul>
     				</div>
     				<div class="col-md-4">
     					<h4>Contacte-nos</h4>
     					<div class="border-footer-title mb-5"></div>
     					<?php 

					      $args = array( 'post_type' => 'contactos', 'posts_per_page' => 4);
					      $loop = new WP_Query( $args );
					      while ( $loop->have_posts() ) : $loop->the_post();   
					    ?>
     					<div class="footer-contactos mb-3">
     						<?php echo the_field('icone');?><?php echo the_field('nome');?>
     					</div>
     					<?php

					      endwhile;

					    ?>
     					<!-- <div class="footer-contactos mb-3">
     						<i class="fas fa-phone-alt"></i>+258 87 1234567
     					</div>
     					<div class="footer-contactos mb-3">
     						<i class="fas fa-envelope"></i>info@comarpforum.com
     					</div>
     					<div class="footer-contactos mb-3">
     						<i class="fas fa-map-marker-alt"></i>Av. Ahmed Sekou Touré nr. 1452, Maputo
     					</div> -->
     				</div>
     			</div>
     			<div class="border-footer"></div>
     			<div class="text-center mt-5">
     				&copy; <?php echo date('Y')?> - COMARP FORUM. Todos Direitos Reservados. Desenvolvido do jeito ✓ pela <a href="https://mechanical.co.mz" target="_blank" class="text-laranja">Mechanical Tecnologia.</a>	
	     		</div>
     		</div>
     	</div>
     </footer>

	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/popper.min.js"></script>								
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>								
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>	
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>						
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.cubeportfolio.min.js"></script>		
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/cubemain.js"></script>		
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/script.js"></script>	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
