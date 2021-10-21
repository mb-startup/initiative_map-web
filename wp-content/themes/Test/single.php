<?php
	// Добавляем содержимое файла header.php 
	get_header();
?>
<div class="content container">
	<div class="post page">
		<?php the_post(); // Получаем данные о странице ?>
		<article class="page__article">
			<h1 class="page__title"><?php the_title(); // Заголовок страницы ?></h1>
			<?php 
				if(in_category(20)):?>
			<h2>Город: <?php the_field('City'); ?></h2>
			<img width="200px" src="<?php 
							if (has_post_thumbnail()) {
								the_post_thumbnail_url();
							}
							else {
								
							};
						?>">
			<?php endif;?>
			<?php the_content(); // Выводим содержимое страницы ?>
		</article>

	</div> <!-- .post .page -->
	<?php if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
				?>
</div> <!-- .content -->
<?php
	// Добавляем содержимое файла footer.php 
	get_footer();
?>