<?php get_header(); ?>

<div class="flex wrap-<?php echo get_post_type()?>">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>