<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package COMARP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/fonts/font-awesome/css/all.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<!-- Preloader -->
<!-- <div class="preloader-bg"></div><div id="preloader"><div id="preloader-status"><div class="preloader-position loader"><span></span></div></div></div> -->
<!-- Progress scroll totop -->
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<header id="header">
		<div id="header-scroll" class="header-menu py-3">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-2 logo">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-8">
                                <a href="index.php">
                                	<div class="logo-box">
                                   		<img src="<?php echo get_template_directory_uri();?>/img/logo/main-logo.png" style="width: 100%;">
                                	</div>
                                </a>
                            </div>
                            <div class="col-4 invisible-desktop text-right">
                                <button id="botaoMenu" class="btn btn-comarp-laranja">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 alinhar-end">
                    	<div id="menu">
                    		<div class="header-nav-menu">
	                    		<nav class="flex">
		                    		<ul>
		                    			<?php
									        wp_nav_menu( array(
									            'theme_location'    => 'menu-1',
									            'menu_id'           => 'primary-menu',
									            
									        ) );
											 
										?>		                    		
		                    		</ul>
		                    		<ul class="flex">
		                    			<li class="me-3">
		                    				<a href="#" class="btn btn-sm btn-comarp-azul" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
		                    					Reservar
		                    				</a>

											<!-- Modal -->
											<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											  <div class="modal-dialog modal-dialog-centered">
											    <div class="modal-content bg-white">
											      <div class="modal-header">
											        <h5 class="modal-title fw-bold" id="staticBackdropLabel">Faça a sua reserva!</h5>
											        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											      </div>
											      <div class="modal-body">
											      	<?php 
						                                if(is_active_sidebar('sidebar-4')) {
						                                    dynamic_sidebar('sidebar-4');
						                                }
						                            ?>
											      </div>
											    </div>
											  </div>
											</div>
		                    			</li>
		                    			<li><a href="#" class="btn btn-sm btn-comarp-laranja">Seja membro</a></li>
		                    		</ul>
		                    	</nav>
                    		</div>
                    	</div>
                    </div>						
				</div>
			</div>
		</div>
	</header>
	
