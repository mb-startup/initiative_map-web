<?php
/* Define these, So that WP functions work inside this file */
define('WP_USE_THEMES', false);
require( $_SERVER['DOCUMENT_ROOT'] .'/wp-blog-header.php');
?>
<?php
if(isset($_POST['send']) == '1') {
 $post_title = $_POST['title'];
 $post_excerpt  = $_POST['desc'];
 $post_category = $_POST['cat'];
 $post_content = $_POST['description'];
 
 $new_post = array(
 'ID' => '',
 'post_author' => $user->ID,
 'post_category' => array($post_category),
 'post_content' => $post_content,
 'post_title' => $post_title,
 'post_excerpt' => $post_excerpt,
 'post_status' => 'publish'
 );
 
 $post_id = wp_insert_post($new_post);
 
 // This will redirect you to the newly created post
 $post = get_post($post_id);
 wp_redirect($post->guid);
}
?>