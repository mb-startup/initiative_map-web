<?php
	add_action('wp_enqueue_scripts', 'test_scripts');

	function test_scripts() {
		wp_enqueue_style('test-style', get_stylesheet_uri());
		wp_enqueue_style('header_style', get_template_directory_uri(). '/assets/css/style.css');
		
	};

	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');

	function filter_get_the_category( $categories, $post_id ) {
  // loop post categories
  foreach ($categories as $index => $category) {
    // check for certain category, you could also check for $term->slug or $term->term_id
    if ( 'Актуальные' === $category->name ) {
      // remove it from the array
      unset( $categories[$index] );
    }
    if ( 'Петиции' === $category->name ) {
      // remove it from the array
      unset( $categories[$index] );
    }
  }
  return $categories;
}
add_filter( 'get_the_categories', 'filter_get_the_category', 10, 2 );




?>