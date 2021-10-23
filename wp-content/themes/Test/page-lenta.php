<?php
	/*
	Template name: Лента
	*/
?>

<?php 
	get_header();
?>

	<div class="container content">
		<div class="side-bar">
			<div class="row">
			<form class="d-flex search col-3">
		        <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
		        <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true" style="color:#BFBFBF;"></i></button>
	      	</form>
	      	<div class="dropdown col-2">
			  <button class="btn btn-sort dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
			    Сортировка по
			  </button>
			  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
			    <li><a class="dropdown-item active" href="#">Дате</a></li>
			    <li><a class="dropdown-item" href="#">Лайкам</a></li>
			    <li><a class="dropdown-item" href="#">Расположению</a></li>
			    <li><a class="dropdown-item" href="#">Алфавиту</a></li>
			  </ul>
			</div>
			</div>
		</div>

		<div class="title"><h1>Живая лента</h1></div>
		<div class="row">
			<?php 
				$posts = get_posts( array(
					'numberposts' => -1,
					'category'    => 20,
					'orderby'     => 'date',
					'order'       => 'DESC',
					'post_type'   => 'post',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				) );

				foreach( $posts as $post ){
					setup_postdata($post);
				    // формат вывода the_title() ...
				    ?>
				<div onclick="location.href='<?php the_permalink(); ?>';" class="petition  col-xl-4 col-md-6">
					<div class="img-pet">
						<img src="
						<?php 
							if (has_post_thumbnail()) {
								the_post_thumbnail_url();
							}
							else {
								echo('https://image.shutterstock.com/image-vector/no-image-vector-symbol-missing-260nw-1310632172.jpg');
							};
						?>">
					</div>
					<div class="text">
						<h1><?php the_title(); ?></h1>
						<h2><?php the_excerpt(); ?></h2>
					</div>
					<div class="type"><?php the_tags( 'Тип: ', ' > '); ?></div>
					<div class="address">Город: <?php the_field('City'); ?> </div>
					<div class="like">
						<span class="img-like"><i class="fa fa-heart" aria-hidden="true" style="color:red;"></i><span class="number"><?php the_field('like'); ?></span></span>
						<span class="img-comment"><i class="fa fa-comment " aria-hidden="true"></i><span class="number"><?php echo comments_number(0,1,'%'); ?></span></span>
					</div>
				</div>


				<?php
					}
					wp_reset_postdata();

				?>






		<!--<div class="petition col-xl-4 col-md-6">
			<div class="img-pet">
				<img src="https://image.shutterstock.com/image-vector/no-image-vector-symbol-missing-260nw-1310632172.jpg" alt="">
			</div>
			<div class="text">
				<h1>Заголовок</h1>
				<h2>Описание</h2>
			</div>
			<div class="type">Тип: Здания</div>
			<div class="address">Адрес: Блюхера 6а</div>
			<div class="like">
				<div class="img-like"><i class="fa fa-heart-o" aria-hidden="true" style="color:red;"></i></div>
				<div class="number">160</div>
			</div>
		</div>

		<div class="petition col-xl-4 col-md-6">
			<div class="img-pet">
				<img src="https://image.shutterstock.com/image-vector/no-image-vector-symbol-missing-260nw-1310632172.jpg" alt="">
			</div>
			<div class="text">
				<h1>Заголовок</h1>
				<h2>Описание</h2>
			</div>
			<div class="type">Тип: Здания</div>
			<div class="address">Адрес: Блюхера 6а</div>
			<div class="like">
				<div class="img-like"><i class="fa fa-heart-o" aria-hidden="true" style="color:red;"></i></div>
				<div class="number">160</div>
			</div>
		</div>
		<div class="petition col-xl-4 col-md-6">
			<div class="img-pet">
				<img src="https://image.shutterstock.com/image-vector/no-image-vector-symbol-missing-260nw-1310632172.jpg" alt="">
			</div>
			<div class="text">
				<h1>Заголовок</h1>
				<h2>Описание</h2>
			</div>
			<div class="type">Тип: Здания</div>
			<div class="address">Адрес: Блюхера 6а</div>
			<div class="like">
				<div class="img-like"><i class="fa fa-heart-o" aria-hidden="true" style="color:red;"></i></div>
				<div class="number">160</div>
			</div>
		</div>

		<div class="petition col-xl-4 col-md-6">
			<div class="img-pet">
				<img src="https://image.shutterstock.com/image-vector/no-image-vector-symbol-missing-260nw-1310632172.jpg" alt="">
			</div>
			<div class="text">
				<h1>Заголовок</h1>
				<h2>Описание</h2>
			</div>
			<div class="type">Тип: Здания</div>
			<div class="address">Адрес: Блюхера 6а</div>
			<div class="like">
				<div class="img-like"><i class="fa fa-heart-o" aria-hidden="true" style="color:red;"></i></div>
				<div class="number">160</div>
			</div>
		</div> -->
	</div>
	<div class="pagination">
		<div class="pag prev"><i class="fa fa-angle-double-left" aria-hidden="true"></i></div>
		<div class="pag active">1</div>
		<div class="pag">2</div>
		<div class="pag">3</div>
		<div class="pag">4</div>
		<div class="pag">5</div>
		<div class="pag next"><i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
	</div>
	</div>

<?php 
	get_footer();
?>