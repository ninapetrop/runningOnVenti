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
		<?php
		// Grab the first thre ...
		$args = array( 'posts_per_page' => 1, 'offset'=> 0);
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

			<div class='article-group active'>
				<!-- Set the feature_image as the background image -->
				<div class='preview-image'></div>
				<!-- Fill the content box -->
				<div class='preview-excerpt'>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<p class='excerpt'><?php the_excerpt(); ?></p>
				</div>
			</div>

		<?php endforeach;
		wp_reset_postdata();?>

		<!-- What is being cycled through  -->
		<div class='cycle'>
			<?php
			// Grab the first thre ...
			$args = array( 'posts_per_page' => 3, 'offset'=> 0);
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<div class='article-group'>
					<!-- Set the feature_image as the background image -->
					<div class='preview-image'></div>
					<!-- Fill the content box -->
					<div class='preview-excerpt'>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<p class='excerpt'><?php the_excerpt(); ?></p>
					</div>
				</div>

			<?php endforeach;
			wp_reset_postdata();?>
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

<section id='middle'>
	<div class='category-wrap' id='training'>
		<h3>Training</h3>
		<div class='group'>
			<div class='image-background'></div>
			<?php
			// Grab the first thre ...
			$args = array( 'posts_per_page' => 4, 'offset'=> 0, 'category_name' => "training");
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<ul>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</ul>

			<?php endforeach;
			wp_reset_postdata();?>
		</div>

	</div>
</section>

<!-- <?php the_posts_navigation(); ?> -->
