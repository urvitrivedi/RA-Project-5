<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php echo '
			<section class="abouthero" style="background: linear-gradient(rgba(0,0,0,0.15), rgba(0,0,0,0.15)), url('.get_banner().'); background-size: cover; background-position:bottom;">
			</section>'; ?>
	<div class="adventures-single-post-container">
		<h2 class="margin-bottom-none"><?php the_title(); ?></h2>
		<h6 class="margin-top-none"><?php the_author(); ?></h6>
		<p class="adventures-single-text"><?php the_content(); ?></p>
		<div>
			<a href="#">
				<li class="flex">
					<button class="social-media-icons-btn">
						<i class="fa fa-facebook font-white" aria-hidden="true">&nbsp;&nbsp;LIKE</i>
					</button>
					<button class="social-media-icons-btn">
						<i class="fa fa-twitter font-white" aria-hidden="true">&nbsp;&nbsp;TWEET</i>
					</button>
					<button class="social-media-icons-btn">
						<i class="fa fa-google-plus font-white" aria-hidden="true">&nbsp;&nbsp;PIN</i>
					</button>
					<!-- <div class="font-white social-media-text">Facebook</div> -->
				</li>
			</a>

		</div>
	</div>
	<?php endwhile; ?>
<?php get_footer(); ?>