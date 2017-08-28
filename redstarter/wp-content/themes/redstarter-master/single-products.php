<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="products-single-container flex row">
		<div class="products-single-img flex col"><?php the_post_thumbnail(); ?></div>
		<div class="products-single-content flex col">
			<h2 class="margin-bottom-none orange"><?php the_title(); ?></h2>
			<h4 class="margin-top-none margin-bottom-none semi-bold"><?php the_field('price', $post->ID); ?></h4>
			<?php the_content(); ?>
			<div class="margin-top-none margin-bottom-none">
				
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
					</li>
				</a>

			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php get_footer(); ?>
