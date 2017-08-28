<?php get_header(); ?>

<?php // Single Post Featured Image Attachment
    	$backgroundImgPostSingle = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<!-- Start Main Container -->
<div class="two-column-layout">
	
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="post-container">
			<!-- End Journal Single Post | BG Image, Title and Date -->
			<div class="journal-single-post">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="journal-single-post-image" style="background: url('<?php echo $backgroundImgPostSingle[0]; ?>');background-size:cover;height:600px;">
				<?php endif; ?>
				<h3><?php the_title(); ?></h3>
				<h6 class="white"><?php red_starter_posted_on(); ?>&nbsp; / &nbsp;<span class=""><?php red_starter_comment_count(); ?></span>&nbsp; / &nbsp;<span><?php red_starter_posted_by(); ?></span></h6>
					</div> 
			</div>
			<!-- End Journal Single Post | BG Image, Title and Date -->

			<!-- Start Div wraps content / Category and Tag Links / Social Media Links -->
			<div>
				<?php the_content(); ?>
				<!-- Start Post in categories and Tags -->
					<h6><?php red_starter_entry_footer(); ?></h6>
				<!-- End Post in categories and Tags -->

				<!-- Start Social Media Links -->
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
							</li>
						</a>
					</div> 
				<!-- Start Social Media Links -->

			</div>
			<!-- Start Div wraps content / Category and Tag Links / Social Media Links -->

			<div class="comments-section">
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template(); // goes to comments.php
				endif;
				?>
			</div>
		</div>
	<?php endwhile; ?>

	<!-- Start Sidebar  -->
	<div class="aside-sidebar">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
	<!-- End Sidebar  -->

</div>
<!-- End Main Container -->
<?php get_footer(); ?>
