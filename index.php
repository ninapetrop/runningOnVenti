<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<!-- Originial Sage Documentation -->
<!-- <?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?> -->

<section id='top'>
	<!-- Show the three most recent posts -->
	<div id='article-carousel'>
		<!-- Javascript will fill in the info for these boxes -->
		<div class='article-group active'>
			<div class='article-image'>
				<!-- Image for 'active' article in carousel goes here -->
			</div>
		</div>

		<!-- What is being cycled through  -->
		<div class='cycle-group'>
			<?php
			// Grab the first thre ...
			$args = array( 'posts_per_page' => 3, 'offset'=> 0);
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<div class='article-group'>

					<!-- Set the feature_image as the background image -->
					<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
					<div class='article-image' style="background-image: url(<?php echo $src[0]; ?> ) !important;"></div>

					<!-- Fill the content box -->
					<div class='article-excerpt'>
						<p class='meta'>The Date</p>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<p class='excerpt'><?php the_excerpt(); ?></p>
					</div>
				</div>

			<?php endforeach;
			wp_reset_postdata();?>
		</div>

		<div class='article-excerpt active'>
			<p class='meta'>June 10, 2016</p>
			<a href='#'>The Title and Permalink</a>
			<p class='excerpt'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		</div>
	</div>

	<div id='unique-sidebar'>
		<div class='half'>
			<img src='http://images.clipartpanda.com/coffee-cup-clip-art-black-white-MTLqzMdTa.jpeg'>
			<h2>Running On Venti</h2>
			<p>Your Daily Dose</p>
		</div>
		<div class='half'>
			<ul>
	    <?php wp_list_categories( array(
	        'orderby' => 'name'
	    ) ); ?>
			</ul>
		</div>
	</div>
</section>


<!-- <?php the_posts_navigation(); ?> -->
