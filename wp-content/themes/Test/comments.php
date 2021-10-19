<?php
/**
* @package WordPress
* @subpackage Theme_Compat
* @deprecated 3.0
*
* This file is here for Backwards compatibility with old themes and will be removed in a future version
*
*/
_deprecated_file(
/* translators: %s: template name */
sprintf( __( 'Theme without %s' ), basename( __FILE__ ) ),
'3.0',
null,
/* translators: %s: template name */
sprintf( __( 'Please include a %s template in your theme.' ), basename( __FILE__ ) )
);
 
// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');
 
if ( post_password_required() ) { ?>
<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.'); ?></p>
<?php
return;
}
?>
 
<!-- You can start editing here. -->
 
<?php if ( have_comments() ) : ?>
<h3 id="comments">
<?php
if ( 1 == get_comments_number() ) {
/* translators: %s: post title */
printf( __( 'One response to %s' ), '&#8220;' . get_the_title() . '&#8221;' );
} else {
/* translators: 1: number of comments, 2: post title */
printf( _n( '%1$s response to %2$s', '%1$s responses to %2$s', get_comments_number() ),
number_format_i18n( get_comments_number() ), '&#8220;' . get_the_title() . '&#8221;' );
}
?>
</h3>
 
<div class="navigation">
<div class="alignleft"><?php previous_comments_link() ?></div>
<div class="alignright"><?php next_comments_link() ?></div>
</div>
 
<ol class="commentlist">
<?php wp_list_comments();?>
</ol>
 
<div class="navigation">
<div class="alignleft"><?php previous_comments_link() ?></div>
<div class="alignright"><?php next_comments_link() ?></div>
</div>
<?php else : // this is displayed if there are no comments so far ?>
 
<?php if ( comments_open() ) : ?>
<!-- If comments are open, but there are no comments. -->
 
<?php else : // comments are closed ?>
<!-- If comments are closed. -->
<p class="nocomments"><?php _e('Comments are closed.'); ?></p>
 
<?php endif; ?>
<?php endif; ?>
 
<?php //comment_form(); ?>
<?php
$fields = array(
'author' => '<p class="comment-form-author"><label for="author">' . __( 'Name' ) . ($req ? '<span class="required">*</span>' : '') . '</label><br><input type="text" id="author" name="author" class="author" value="' . esc_attr($commenter['comment_author']) . '" placeholder="" pattern="[A-Za-zА-Яа-я]{3,}" maxlength="30" autocomplete="on" tabindex="1" required' . $aria_req . '></p>',
'email' => '<p class="comment-form-email"><label for="email">' . __( 'Email') . ($req ? '<span class="required">*</span>' : '') . '</label><br><input type="email" id="email" name="email" class="email" value="' . esc_attr($commenter['comment_author_email']) . '" placeholder="admin@stepkinblog.ru" maxlength="30" autocomplete="on" tabindex="2" required' . $aria_req . '></p>',
'url' => '<p class="comment-form-url"><label for="url">' . __( 'Website' ) . '</label><br><input type="url" id="url" name="url" class="site" value="' . esc_attr($commenter['comment_author_url']) . '" placeholder="stepkinblog.ru" maxlength="30" tabindex="3" autocomplete="on"></p>'
);
 
$args = array(
'comment_notes_after' => '',
'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br><textarea id="comment" name="comment" class="comment-form" cols="45" rows="8" aria-required="true" placeholder="Текст сообщения..."></textarea></p>',
'label_submit' => 'Отправить',
'fields' => apply_filters('comment_form_default_fields', $fields)
);
comment_form($args);
?>