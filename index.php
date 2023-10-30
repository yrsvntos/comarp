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


	<section id="banner-single" style="background: url('<?php echo get_template_directory_uri()?>/img/banner/banner-single.png') no-repeat center center/cover;">
		<div class="overlay flex-center">
			<div class="container">
				<div class="py-5">
					<h1 class="fw-bold text-center">BLOG</h1>
				</div>
			</div>
		</div>
	</section>

    <section id="blog"  class="bg-cinza">
		<div class="container">
			<div class="py-5">
				<h1 class="text-center">Blog</h1>
				<h4 class="text-laranja text-center">#Blog</h4>
				<div class="blog-content mt-4">
					<div class="row">
						<?php 

                          $args = array( 'post_type' => 'post',);
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

<?php

get_footer();
