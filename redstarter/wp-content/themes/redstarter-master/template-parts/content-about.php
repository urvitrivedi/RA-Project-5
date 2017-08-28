<?php
/*
	Template Name: About Template
*/
	?>

<?php get_header(); ?>
	
		<?php echo '
			<section class="abouthero" style="background: linear-gradient(rgba(0,0,0,0.40), rgba(0,0,0,0.40)), url('.get_banner().'); background-size: cover; background-position:bottom;">
			</section>'; ?>
		<?php unregister_sidebar( 'sidebar-1' ); ?> <?php// Remove Sidebar from About Us Page ?>
		<div class="flex flex-just-center">
			<?php while(have_posts()):the_post(); ?>
				<div class="aboutus-page"><?php the_content(); ?></div>
			<?php endwhile; ?>
		</div>
<?php get_footer(); ?>