<?php get_template_part('templates/page', 'header'); ?>

<div class='row'>
	<div class='container'>

		<!-- Category Specific Sections -->
		<div class='category-wrap col-xs-12 col-sm-6 col-lg-3' id='product-reviews'>
			<h3 id='training'>Product Reviews</h3>

				<!-- First Section: Show the most recent post in a category and also show the thumbnail -->
				<?php
				// Grab the first thre ...
				$args = array( 'posts_per_page' => 10, 'offset'=> 0, 'category_name' => "product-reviews");
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

		</div>
	</div>
</div>
