
<article class='category-result'>
	<header class='category-header'>
		<h1>It's Not All Physical Articles</h1>
	</header>

		<!-- First Section: Show the most recent post in a category and also show the thumbnail -->
		<?php
		// Grab the first thre ...
		$args = array( 'posts_per_page' => 100, 'offset'=> 0, 'category_name' => "its-not-all-physical");
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

			<article class='search-result'>
				<header>
					<p class='meta'><?php the_time('F j, Y'); ?></p>
					<h2 class='entry-title'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</header>
				<div class='entry-summary'>
					<?php the_excerpt(); ?>
				</div>
				<div class='article-break'></div>
				<!-- Fill the content box -->
			</article>

		<?php endforeach;
		wp_reset_postdata();?>
</article>
