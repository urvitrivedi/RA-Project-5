<?php // Journal post Featured Image Attachment
    	$backgroundImgPost = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<?php if(is_front_page()){ ?>
	<div class="fp-journal-posts flex col">
		<div class="fp-journal-img"><?php the_post_thumbnail(); ?></div>
		<h6 class="fp-date"><?php the_date('F j, Y'); ?>&nbsp; / &nbsp;<span class="fp-comments"><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></span></h6>
		<h5 class="margin-left-1rem margin-top-none margin-right-3rem turquoise"><?php the_title(); ?></h5>
		<a href="<?php the_permalink(); ?>"><button class="black-outline-btn">Read Entry</button></a>
	</div>
<?php } ?>
<?php if (is_home()) { ?>
<div class="flex col archive-post-page">
	<div class="archive-each-post">
		<div class="" style="background: url('<?php echo $backgroundImgPost[0]; ?>');background-size:cover;height:600px;">
		<h3 class=""><?php the_title(); ?></h3>
		<h6 class="white"><?php the_date('F j, Y'); ?>&nbsp; / &nbsp;<span class=""><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></span>&nbsp; / &nbsp;<span><?php the_author(); ?></span></h6>
		</div>
	<div>
		<p><?php the_excerpt(); ?></p>
		<a href="<?php the_permalink(); ?>"><button class="black-outline-btn">Read More &nbsp; &rarr;</button></a>
	</div>
</div>
<?php } ?>
