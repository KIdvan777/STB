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
			<div class="col-md-12 flex">
				<?php $products_cat_query = new WP_Query(array(
					'posts_per_page' => 8,
					'post_type' => 'product',
					'tax_query' => array(
						array(
							'taxonomy' => 'product-category',
							'field'    => 'id',
							'terms'    => 24
						)
					)
				));
					while( $products_cat_query->have_posts() ){
						$products_cat_query->the_post();?>

						<div class="top_hits_item col-md-3">
							<div class="top_hits_item__img">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="top_hits_item__span">
								<span>
									<?php the_title(); ?>
								</span>
							</div>
							<div class="top_hits_item_overlay">
								<div class="top_hits_item_overlay_link">
									<a href="<?php the_permalink(); ?>">
										подробнее
									</a>
								</div>
							</div>
						</div>
				 <?} wp_reset_query(); ?>
			</div>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
