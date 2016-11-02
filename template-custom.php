<?php
/**
 * Template Name: Custom Template
 */
?>
<aside>
	<h3>Special Sidebar for the About Page</h3>
	<ul>
		<li>
			Links to sites etc.
		</li>
	</ul>
</aside>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
