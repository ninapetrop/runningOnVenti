
<?php while (have_posts()) : the_post(); ?>
  <article class='active-post' <?php post_class(); ?>>

    <header>
			<div class='entry-meta'>
				<?php get_template_part('templates/entry-meta'); ?>
			</div>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
		<?php the_content(); ?>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
