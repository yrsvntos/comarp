<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package COMARP
 */

get_header();
?>

	<main>
		<section id="banner-single" style="background: url('<?php echo get_template_directory_uri()?>/img/banner/banner-single.png') no-repeat center center/cover;">
			<div class="overlay flex-center">
				<div class="container">
					<div class="py-5">
						<h1 class="fw-bold text-center">BLOG</h1>
					</div>
				</div>
			</div>
		</section>
		<section id="blog-single" class="bg-white">
			<div class="container">
				<div class="py-5">
					<div class="row">
						<div class="col-md-9">
							<div class="conferencia-single-box">
								<div class="conferencia-img">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" style="width: 100%; object-fit: contain;" class="rounded-3">
								</div>
								<div class="conferencia-content bg-white p-3">
									<div class="conferencia-date azul mb-3">
										<div class="row">
											<div class="col-6">
												<i class="fas fa-user cinza me-2"></i>COMARP Forum
											</div>
											<div class="col-6 text-end">
												<i class="fas fa-calendar-alt me-2"></i><?php echo the_time('d-m-Y'); ?>
											</div>
										</div>
									</div>
									<div class="conferencia-content">
										<h4 class="cinza fw-bold"><?php echo the_title(); ?></h4>
										<p><?php echo the_content(); ?></p>
										<!-- <p><strong>Partilhe em:&nbsp;&nbsp;<br></strong><a href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>" class="icone"><i class="fab fa-whatsapp whatsapp"></i> &nbsp;</a><a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" class="icone"><i class="fab fa-facebook-f facebook"></i></a> &nbsp;<a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&su='<?php the_title(); ?>'&body='Veja a notícia completa em: <?php the_permalink(); ?>'&ui=2&tf=1&pli=1" class="icone"><i class="fas fa-envelope mail"></i></a></p> -->
										<?php comments_template();?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 d-md-block d-none">
							<div class="search-box mb-3 bg-cinza p-3">
								<div class="input-group">
									<div class="form-outline">
									    <input type="search" id="form1" class="form-control" placeholder="Pesquisar" />
									</div>
								 	<button type="button" class="btn btn-comarp-azul">
								    	<i class="fas fa-search"></i>
								  	</button>
								</div>
							</div>
							<div class="categorias bg-cinza p-3 mb-3">
								<h5 class="cinza">Categorias</h5>
								<div class="cfr-border rounded-3 mb-3"></div>
								<ul>
									<?php
	                                    $categories = get_the_category();
	                                    $output ='';

	                                    if($categories){
	                                        foreach($categories as $category){
	                                            $output .= '<li class="mb-2 pb-2"><a href="'.get_category_link($category->term_id).'" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="">'.$category->cat_name.'</a></li>';
	                                        }
	                                    }

	                                    echo trim($output);
	                                ?>
								</ul>
							</div>
							<div class="noticias-recentes bg-cinza p-3">
								<h5 class="cinza">Notícias recentes</h5>
								<div class="cfr-border rounded-3 mb-3"></div>
								<div class="row align-items-center">
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
			                        	<div class="blog-img">
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" style="width: 100%;">
										</div>
			                        </div>
			                        <div class="col-md-8">
			                        	<div class="blog-info">
											<div class="blog-user">
												<span><i class="fas fa-calendar-alt me-2"></i><?php the_time('d.m.y');?></span>
											</div>
											<div class="blog-news mt-1">
												<h5 class="text-azul fw-bold"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
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
				</div>
			</div>
		</section>
															
																
	</main>	

<?php

get_footer();
