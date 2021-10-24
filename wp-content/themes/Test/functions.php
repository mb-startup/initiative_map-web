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

/*add_action('map_exsist', 'your_function_name', 10, 3 );
function your_function_name( $form_id, $post_id, $form_settings ) {
    echo do_shortcode('[shmMap id="66"]');
}*/


if( ! function_exists( 'better_commets' ) ):
function better_commets($comment, $args, $depth) {
    ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div class="comment-body">
        <div class="comment-img d-none d-sm-block">
            <?php echo get_avatar($comment,$size='50',$default='http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g' ); ?>
            <strong><?php echo get_comment_author() ?></strong>
            <span class="date float-right"><?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s' , '5balloons_theme'), get_comment_date()) ?></span>
        </div>
        <div class="comment-block">
            <div class="comment-arrow"></div>
                <?php if ($comment->comment_approved == '0') : ?>
                    <em><?php esc_html_e('Your comment is awaiting moderation.','5balloons_theme') ?></em>
                    <br />
                <?php endif; ?>
                <span class="comment-by">
                    <span class="float-right">
                        <span> <a href="#"><i class="fa fa-reply"></i> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a></span>
                    </span>
                </span>
<?php comment_text() ?>
            
        </div>
        </div>

<?php
        }
endif;




?>