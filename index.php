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

<div class='row' id='top'>
	<div class='container'>
		<div class='col-xs-12 col-lg-8' id='slider-wrapper' style='justify-content: space-between;'>
		<!-- Show the three most recent posts -->
			<div id='slider-container'>
				<!-- Holds the Slides -->
				<!-- <div class="slide one" style='background-image: url("https://s-media-cache-ak0.pinimg.com/736x/7c/4b/0e/7c4b0e9ecd5afd76af57e5131f31ad67.jpg")'></div>
		    <div class="slide two" style='background-image: url("https://d13yacurqjgara.cloudfront.net/users/288987/screenshots/1887840/attachments/320942/chieftain-wallpaper-1920x1080.jpg")'></div>
		    <div class="slide three" style='background-image: url("http://wallpapersonthe.net/wallpapers/b/3840x2160/3840x2160-polygon_art_vector_polygon-13251.png")'></div> -->

				<?php
				// Grab the first thre ...
				$args = array( 'posts_per_page' => 1, 'offset'=> 0);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

					<!-- Set the feature_image as the background image -->
					<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
					<div class='slide one' style="background-image: url(<?php echo $src[0]; ?> ) !important;"></div>

				<?php endforeach;
				wp_reset_postdata();?>

				<?php
				// Grab the first thre ...
				$args = array( 'posts_per_page' => 1, 'offset'=> 1);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

					<!-- Set the feature_image as the background image -->
					<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
					<div class='slide two' style="background-image: url(<?php echo $src[0]; ?> ) !important;"></div>

				<?php endforeach;
				wp_reset_postdata();?>

				<?php
				// Grab the first thre ...
				$args = array( 'posts_per_page' => 1, 'offset'=> 2);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

					<!-- Set the feature_image as the background image -->
					<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
					<div class='slide three' style="background-image: url(<?php echo $src[0]; ?> ) !important;"></div>

				<?php endforeach;
				wp_reset_postdata();?>
			</div>

			<ul id='menu'style='margin-left: 10px;'>

				<?php
				// Grab the first thre ...
				$args = array( 'posts_per_page' => 1, 'offset'=> 0);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

					<!-- Set the feature_image as the background image -->
					<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
					<li style="background-image: url(<?php echo $src[0]; ?> ) !important;"></li>

				<?php endforeach;
				wp_reset_postdata();?>
				<?php
				// Grab the first thre ...
				$args = array( 'posts_per_page' => 1, 'offset'=> 1);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

					<!-- Set the feature_image as the background image -->
					<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
					<li style="background-image: url(<?php echo $src[0]; ?> ) !important;"></li>

				<?php endforeach;
				wp_reset_postdata();?>
				<?php
				// Grab the first thre ...
				$args = array( 'posts_per_page' => 1, 'offset'=> 2);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

					<!-- Set the feature_image as the background image -->
					<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
					<li style="background-image: url(<?php echo $src[0]; ?> ) !important;"></li>

				<?php endforeach;
				wp_reset_postdata();?>

			</ul>

			<div id='exerpt-container'>
				<?php
				// Grab the first thre ...
				$args = array( 'posts_per_page' => 1, 'offset'=> 0);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

					<div class='exerpt'>
						<p class='meta'><?php the_date(); ?></p>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<p class='exerpt'><?php the_excerpt(); ?></p>
					</div>

				<?php endforeach;
				wp_reset_postdata();?>

				<?php
				// Grab the first thre ...
				$args = array( 'posts_per_page' => 2, 'offset'=> 1);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

					<div class='exerpt' style='visibility:hidden'>
						<p class='meta'><?php the_date(); ?></p>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<p class='exerpt'><?php the_excerpt(); ?></p>
					</div>

				<?php endforeach;
				wp_reset_postdata();?>
			</div> <!-- ./exerpt-container -->
		</div> <!-- slider-wrapper -->
		<div class='col-xs-12 col-lg-4 pull-right' id='unique-sidebar'>
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
</div>

<div class='row' id='middle'>
	<div class='container'>

		<!-- Category Specific Sections -->
		<div class='category-wrap col-xs-12 col-sm-6 col-lg-3 pull-left' id='training'>
			<h3 id='cross-training'>Cross Training</h3>

				<!-- First Section: Show the most recent post in a category and also show the thumbnail -->
				<?php
				// Grab the first thre ...
				$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category_name' => "cross-training");
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
				$args = array( 'posts_per_page' => 2, 'offset'=> 1, 'category_name' => "cross-training");
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

		<div class='category-wrap col-xs-12 col-sm-6 col-lg-3' id='recipes'>
			<h3 id='fuel-up'>Fuel Up!</h3>

				<!-- First Section: Show the most recent post in a category and also show the thumbnail -->
				<?php
				// Grab the first thre ...
				$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category_name' => "fuel-up");
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
				$args = array( 'posts_per_page' => 2, 'offset'=> 1, 'category_name' => "fuel-up");
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

		<div class='category-wrap col-xs-12 col-sm-6 col-lg-3' id='lifestyle'>
			<h3 id='life'>Life</h3>

				<!-- First Section: Show the most recent post in a category and also show the thumbnail -->
				<?php
				// Grab the first thre ...
				$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category_name' => "life");
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
				$args = array( 'posts_per_page' => 2, 'offset'=> 1, 'category_name' => "life");
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

		<div class='category-wrap col-xs-12 col-sm-6 col-lg-3' id='product-reviews'>
			<h3 id='its-not-all-physical'>It's Not All Physical</h3>

				<!-- First Section: Show the most recent post in a category and also show the thumbnail -->
				<?php
				// Grab the first thre ...
				$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category_name' => "its-not-all-physical");
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
				$args = array( 'posts_per_page' => 2, 'offset'=> 1, 'category_name' => "its-not-all-physical");
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
</div>
<section id='instagram'>
	<?php echo do_shortcode('[instagram-feed]'); ?>

</section>



<!-- <?php the_posts_navigation(); ?> -->
