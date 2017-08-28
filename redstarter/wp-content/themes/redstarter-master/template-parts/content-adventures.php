<?php 
	// Adventure Featured Image Attachment
    $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

if(is_front_page()){ ?>
	<div class="fp-adventures-posts grid">
		<div class="fp-adventures-img" style="background: url('<?php echo $backgroundImg[0]; ?>');background-size:cover; background-position:center;">
		<h2><?php the_title(); ?></h2>
		<a href="<?php the_permalink(); ?>"><button class="white-outline-btn">Read More</button></a>
		</div>
	</div>
<?php } ?>
<?php if(is_post_type_archive() ){ ?>
	<div class="archive-adventures-posts">
		<div class="archive-adventures-img" style="background: url('<?php echo $backgroundImg[0]; ?>');background-size:cover;height:500px;background-position:center;">
		<h2><?php the_title(); ?></h2>
		<a href="<?php the_permalink(); ?>"><button class="white-outline-btn">Read More</button></a>
		</div>
	</div>
<?php } ?>