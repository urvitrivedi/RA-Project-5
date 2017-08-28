<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<?php

	// Populate the Product->Terms 
	$populateTaxonomies =  get_terms(array(
		"taxonomy" => "activity",
		'hide-empty'=> false,
	));

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					//the_archive_title( '<h1 class="page-title">', '</h1>' );
					//the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>	

			<?php /* Products */ ?>
			<?php if('products'== get_post_type()){ ?>
			<h1 class="position-relative top-5rem">Shop Stuff</h1>
				<div class="archive-term-nav position-relative">
					<?php foreach($populateTaxonomies as $term){ ?>
						<a href='<?php echo get_term_link($term->slug, "activity"); ?>'>
								<button class="archive-taxonomy-link"><?php echo $term->name; ?></button>
						</a>
					<?php } ?>
				</div>
				<div class="flex col flex-align-items-center position-relative taxonomy-term-info">
					<?php if(is_tax()){ ?>
						<h4 class="taxonomy-term-title"><?php echo strtoupper(get_query_var('term')); ?></h4>
						<p class="taxonomy-term-desc"><?php echo get_queried_object()->description; ?></p>
					<?php } ?>
				</div>
			<?php } ?>

			<div class="flex wrap-<?php echo get_post_type()?>">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', get_post_type() ); ?> 				
				<?php endwhile; ?>
			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<!-- <?php //get_sidebar(); ?> -->
<?php get_footer(); ?>
