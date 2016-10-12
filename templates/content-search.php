<article class='search-result'<?php post_class(); ?>>
  <header>
    <?php if (get_post_type() === 'post') { get_template_part('templates/entry-meta'); } ?>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
	<div class='article-break'></div>
</article>
