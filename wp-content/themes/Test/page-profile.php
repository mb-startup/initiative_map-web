<?php
	/*
	Template name: Личный кабинет
	*/
?>

<?php 
	get_header();
?>
<div class="container">
	<?php if ( is_user_logged_in() ) {
			echo do_shortcode('[wp-recall]');
		}
		else {
			echo do_shortcode('[wordpress_social_login]');
		}
	 ?>

</div>
<?php 
	get_footer();
?>

