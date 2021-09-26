<?php
	// Добавляем содержимое файла header.php 
	get_header();
?>
<div class="content container">
	<div class="post page">
		<?php the_post(); // Получаем данные о странице ?>
		<article class="page__article">
			<h1 class="page__title"><?php the_title(); // Заголовок страницы ?></h1>
			<img width="200px" src="<?php 
							if (has_post_thumbnail()) {
								the_post_thumbnail_url();
							}
							else {
								
							};
						?>">
			<?php the_content(); // Выводим содержимое страницы ?>

		</article>
	</div> <!-- .post .page -->
</div> <!-- .content -->
<?php
	// Добавляем содержимое файла footer.php 
	get_footer();
?>