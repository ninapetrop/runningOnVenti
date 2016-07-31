<header class="banner">
  <div class="container">
		<!-- <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav> -->

		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="brand navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

		      <ul class="nav navbar-nav navbar-right">
		        <li><a href=".wordpress/about">About</a></li>
						<li><a href="./wordpress/category/product-reviews">Product Reviews</a></li>
						<li><a href="./wordpress/category/recipes">Recipes</a></li>
						<li><a href="./wordpress/category/training">Training</a></li>
						<li><a href="./wordpress/category/lifestyle">Lifestyle</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="./wordpress/category/archives">Archives</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
	</nav>
  </div>
</header>

<?php get_template_part( 'templates/feature-image' ); ?>
