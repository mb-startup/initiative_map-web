<?php
	/*
	Template name: Личный кабинет
	*/
?>

<?php 
	get_header();
?>
<div class="container content">
	<?php if ( is_user_logged_in() ) {
			echo do_shortcode('[wp-recall]');
		}
		else {
			echo '<div class=signin>';
			echo '<div class=signin-text>';
			echo '<h2>Войдите с помощью ВКонтакте</h2>';
			echo do_shortcode('[TheChamp-Login]');
			echo '</div>';
			echo '</div>';
		}
	 ?>

</div>
<?php 
	get_footer();
?>

