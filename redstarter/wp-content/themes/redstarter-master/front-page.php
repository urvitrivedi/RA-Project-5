<?php get_header(); ?>

<?php echo '
<section class="banner" style="background: linear-gradient(rgba(0,0,0,0.40), rgba(0,0,0,0.40)), url('.get_banner().'); background-size: cover;">
	<div class="overlap-logo">
		<img src="/redstarter/wp-content/themes/redstarter-master/build/images/logos/inhabitent-logo-full.svg">
	</div>
</section>'; ?>

<?php 

// Populate the Product->Terms 
	$populateTaxonomies =  get_terms(array(
		"taxonomy" => "activity",
		'hide-empty'=> false,
	));

// Populate the Adventures -> Posts 
	$journal = new WP_Query(array(
		"post_type" => "post",
		"posts_per_page" => 3,
	));

// Populate the Adventures -> Posts 
	$adventures = new WP_Query(array(
		"post_type" => "adventures",
		"posts_per_page" => 4,
	));

?>
<?php
	// Loop for retrieving the Product->Terms ?>
	<h4 class="flex flex-just-center">Shop Stuff</h4>

	<div class="fp-taxonomy-container flex row flex-just-center">
		<?php
			foreach($populateTaxonomies as $term){ ?>
				<div class="home-taxonomy-link flex col flex-align-items-center">
						<div class="taxonomy-img"><img src="<?php echo bloginfo('template_directory').'/build/images/product-type-icons/'.$term->slug.'.svg'; ?>" /></div>
						<p><?php echo $term->description; ?></p>
						<a href='<?php echo get_term_link($term->slug, "activity"); ?>'>
							<button class="green-fill-btn"><?php echo $term->name." STUFF"; ?></button>
						</a>
				</div>
			<?php } ?>
	</div>
	
	<h4 class="flex flex-just-center padding-top-3rem">Inhabitent Journal</h4>
	<?php // Loop for retrieving the Journal Posts ?>
	<div class="fp-journal-posts-container flex row flex-just-center">
		<?php
			while($journal->have_posts()):$journal->the_post();
				get_template_part("template-parts/content",get_post_type());
			endwhile; 
		?>
	</div>

	<h4 class="flex flex-just-center padding-bottom-3rem">Latest Adventures</h4>
	<?php // Loop for retrieving the Adventure Posts ?>
	<div class="fp-adventures-posts-container grid">
		<?php
			while($adventures->have_posts()):$adventures->the_post();
				get_template_part("template-parts/content",get_post_type());
			endwhile;
		?>
	</div>
	<a href="/redstarter/?post_type=adventures"><button class="green-fill-btn margin-top-2rem margin-left-8rem">More Adventures</button></a>

<div>
<?php get_footer(); ?>
</div>