<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col">
					<div>
						<div class="hero">
							<img alt="Bird Banner Image" class="img-fluid w-100 hero-img" src="<?php echo get_template_directory_uri() ?>/assets/images/banner.png" />
							<div class="hero-text item">
								<div>
									<h2>Wildlife Abounds</h1>
									<p>Duis mollis, est non commodo luctus, nisi erat.</p>
								</div>
								<a class="btn btn-primary float-right-sm">Sign Up</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid featured-items">
			<div class="row no-gutters">
				<div class="col-md-6">
					<div class="item h-100">
						<h2>Lorem ipsum</h2>
						<p>Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="item h-100">
						<h2>Condimentum Ornare</h2>
						<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
					</div>
				</div>
			</div>

			<div class="row no-gutters">
				<div class="col-md-6">
					<div class="item h-100">
						<h2>Vehicula Lorem Aenean</h2>
						<p>Sed posuere consectetur est at lobortis. Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="item h-100">
						<h2>Fringilla</h2>
						<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla.</p>
					</div>
				</div>
			</div>
		</div>

		

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
