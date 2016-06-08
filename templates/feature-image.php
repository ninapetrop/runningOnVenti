<?php if (is_single() && has_post_thumbnail( get_the_ID() )): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
  <div id="featured-image-bg" style="background-image: url('<?php echo $image[0]; ?>')"></div>
<?php endif; ?>
