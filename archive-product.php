<?php get_template_part('template-parts/template-headers/headers');?>

<div class="container">
	<div class="row">
		<div class="col-md-12 flex">
			<div class="col-md-8">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">

						<header class="page-header">
							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
							?>
						</header><!-- .page-header -->

				</main><!-- #main -->
			</div><!-- #primary -->
			
			<div class="top_hits col-md-12 flex">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				the_posts_navigation();




			?>
			</div>
		</div>
		<div class="col-md-4">
			<?php get_template_part('template-parts/filter/filter'); ?>
		</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
