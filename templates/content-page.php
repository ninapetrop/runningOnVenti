<article class='active-post'>
	<?php get_template_part('templates/page', 'header'); ?>
	<?php the_content(); ?>
</article>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
