<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lindsay_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lindsay-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col masthead-col">
					<div class="row">
						<div class="col">
							<div class="site-branding">
								<img alt="Bark River Reserve Logo" id="logo" class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/images/Logo.png" />
							</div><!-- .site-branding -->
						</div>
						<div class="col">
							<nav id="site-navigation" class="main-navigation d-flex h-100 justify-content-end">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'lindsay-theme' ); ?></button>
								<ul aria-expanded="false" class="align-self-center nav-menu">
									<li class="page_item page-item-8 current_page_item"><a href="#">Home</a></li>
									<li class="page_item page-item-2"><a href="#">About</a></li>
									<li class="page_item page-item-5"><a href="#">Contact</a></li>
								</ul>
								<!-- <?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'menu_class'	 => 'align-self-center',
								) );
								?> -->
							</nav><!-- #site-navigation -->
						</div>
					</div>
				</div>
			</div>

		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
