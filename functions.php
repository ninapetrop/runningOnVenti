<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// Allow PHP to be written inside text-widget
function php_execute($html){
	if(strpos($html,"<"."?php")!==false){ ob_start(); eval("?".">".$html);
	$html=ob_get_contents();
	ob_end_clean();
	}
	return $html;
}
add_filter('widget_text','php_execute',100);


// Add Category conditional
$wpb_all_query = new WP_Query(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'category_name' => 'your_category_slug'
));


// Instagram Stuff
