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
	<div class='container'>

		<div id="slider-wrapper"> <!-- aka article-carousel -->

		  <div id="slider-container"> <!-- aka article-group active -->

				<?php
				// Grab the first thre ...
				$args = array( 'posts_per_page' => 3, 'offset'=> 0);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<!-- Set the feature_image as the background image -->
				<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
				<div class='slide' style="background-image: url(<?php echo $src[0]; ?> ) !important;"></div> <!-- aka article-image -->

				<?php endforeach;
				wp_reset_postdata();?>

			</div>

		  <ul id="menu">

				<?php
				// Set up the side menu
				$args = array( 'posts_per_page' => 3, 'offset'=> 0);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<!-- Set the feature_image as the background image -->
				<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
				<li style="background-image: url(<?php echo $src[0]; ?> ) !important;"></li>

				<?php endforeach;
				wp_reset_postdata();?>
		  </ul>

		  <div id="exerpt-container">
				<?php
				// Grab the first thre ...
				$args = array( 'posts_per_page' => 3, 'offset'=> 0);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		    	<div class="exerpt ">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<p class='excerpt'><?php the_excerpt(); ?></p>
					</div>
				<?php endforeach;
				wp_reset_postdata();?>
		  </div>

		</div>
	</div> <!-- /.container -->
</section>

<section id='top'>
	<div class='container'>
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
</div> <!-- /.container -->
</section>

<section id='middle'>
	<div class='container'>
	<!-- Category Specific Sections -->
	<div class='category-wrap' id='training'>
		<h3>Training</h3>

			<!-- First Section: Show the most recent post in a category and also show the thumbnail -->
			<?php
			// Grab the first thre ...
			$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category_name' => "training");
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<div class='article-group'>
					<!-- Set the feature_image as the background image -->
					<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
					<div class='preview-image' style="background-image: url(<?php echo $src[0]; ?> ) !important;"></div>

					<!-- Fill the content box -->
					<div class='preview-excerpt'>
						<p class='meta'><?php the_time('F j, Y'); ?></p>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<p class='excerpt'>A shorter excerpt that is only about 5 lines long or so. It's difficult to d in Wordpress because Wordpress sucks so much, but rest assured - I'll have it. Mark these fine printed words, I'll have it</p>
					</div>
				</div>

			<?php endforeach;
			wp_reset_postdata();?>

			<?php
			// Grab the first thre ...
			$args = array( 'posts_per_page' => 2, 'offset'=> 1, 'category_name' => "training");
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<div class='article-group'>

					<!-- Fill the content box -->
					<div class='preview-excerpt'>
						<p class='meta'><?php the_time('F j, Y'); ?></p>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
				</div>

			<?php endforeach;
			wp_reset_postdata();?>

	</div>

	<div class='category-wrap' id='recipes'>
		<h3>Recipes</h3>

			<!-- First Section: Show the most recent post in a category and also show the thumbnail -->
			<?php
			// Grab the first thre ...
			$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category_name' => "recipes");
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<div class='article-group'>
					<!-- Set the feature_image as the background image -->
					<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
					<div class='preview-image' style="background-image: url(<?php echo $src[0]; ?> ) !important;"></div>

					<!-- Fill the content box -->
					<div class='preview-excerpt'>
						<p class='meta'><?php the_time('F j, Y'); ?></p>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<p class='excerpt'>A shorter excerpt that is only about 5 lines long or so. It's difficult to d in Wordpress because Wordpress sucks so much, but rest assured - I'll have it. Mark these fine printed words, I'll have it</p>
					</div>
				</div>

			<?php endforeach;
			wp_reset_postdata();?>

			<?php
			// Grab the first thre ...
			$args = array( 'posts_per_page' => 2, 'offset'=> 1, 'category_name' => "recipes");
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<div class='article-group'>

					<!-- Fill the content box -->
					<div class='preview-excerpt'>
						<p class='meta'><?php the_time('F j, Y'); ?></p>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
				</div>

			<?php endforeach;
			wp_reset_postdata();?>

	</div>

	<div class='category-wrap' id='lifestyle'>
		<h3>Lifestyle</h3>

			<!-- First Section: Show the most recent post in a category and also show the thumbnail -->
			<?php
			// Grab the first thre ...
			$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category_name' => "lifestyle");
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<div class='article-group'>
					<!-- Set the feature_image as the background image -->
					<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
					<div class='preview-image' style="background-image: url(<?php echo $src[0]; ?> ) !important;"></div>

					<!-- Fill the content box -->
					<div class='preview-excerpt'>
						<p class='meta'><?php the_time('F j, Y'); ?></p>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<p class='excerpt'>A shorter excerpt that is only about 5 lines long or so. It's difficult to d in Wordpress because Wordpress sucks so much, but rest assured - I'll have it. Mark these fine printed words, I'll have it</p>
					</div>
				</div>

			<?php endforeach;
			wp_reset_postdata();?>

			<?php
			// Grab the first thre ...
			$args = array( 'posts_per_page' => 2, 'offset'=> 1, 'category_name' => "lifestyle");
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<div class='article-group'>

					<!-- Fill the content box -->
					<div class='preview-excerpt'>
						<p class='meta'><?php the_time('F j, Y'); ?></p>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
				</div>

			<?php endforeach;
			wp_reset_postdata();?>

	</div>

	<div class='category-wrap' id='product-reviews'>
		<h3>Product Reviews</h3>

			<!-- First Section: Show the most recent post in a category and also show the thumbnail -->
			<?php
			// Grab the first thre ...
			$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category_name' => "product-reviews");
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<div class='article-group'>
					<!-- Set the feature_image as the background image -->
					<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
					<div class='preview-image' style="background-image: url(<?php echo $src[0]; ?> ) !important;"></div>

					<!-- Fill the content box -->
					<div class='preview-excerpt'>
						<p class='meta'><?php the_time('F j, Y'); ?></p>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<p class='excerpt'>A shorter excerpt that is only about 5 lines long or so. It's difficult to d in Wordpress because Wordpress sucks so much, but rest assured - I'll have it. Mark these fine printed words, I'll have it</p>
					</div>
				</div>

			<?php endforeach;
			wp_reset_postdata();?>

			<?php
			// Grab the first thre ...
			$args = array( 'posts_per_page' => 2, 'offset'=> 1, 'category_name' => "product-reviews");
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<div class='article-group'>

					<!-- Fill the content box -->
					<div class='preview-excerpt'>
						<p class='meta'><?php the_time('F j, Y'); ?></p>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
				</div>

			<?php endforeach;
			wp_reset_postdata();?>

	</div>

	</div> <!-- /.container -->
</section>

<!-- <section id='instagram'>
	<?php echo do_shortcode('[instagram-feed]'); ?>

</section> -->

<!-- <?php the_posts_navigation(); ?> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/TweenMax.min.js"></script>
