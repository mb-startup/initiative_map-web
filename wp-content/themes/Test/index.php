<?php get_header() ?>

	<div class="container content">
		<div class="row justify-content-end">
			<div class="invite col-3">
				<a href="/vydvizhenie-peticzii/">Выдвинуть инициативу</a>
			</div>
		</div>
		<div class="title-actual col-3">
			<h3>Актуальное <img src="<?php echo bloginfo('template_url'); ?>/assets/img/fire.png" alt=""></h3>
			
		</div>
		<div class="row">

			<?php 
				$posts = get_posts( array(
					'numberposts' => -1,
					'category'    => 9,
					'orderby'     => 'date',
					'order'       => 'DESC',
					'post_type'   => 'post',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				) );

				foreach( $posts as $post ){
					setup_postdata($post);
				    // формат вывода the_title() ...
				    ?>
				<div class="petition col-xl-4 col-md-6">
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
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<h2><?php the_content(); ?></h2>
					</div>
					<div class="type"><?php the_tags( 'Тип: ', ' > '); ?></div>
					<div class="address">Город: <?php the_category('','single'); ?> </div>
					<div class="like">
						<span class="img-like"><i class="fa fa-heart-o" aria-hidden="true" style="color:red;"></i></span>
						<span class="number"><?php echo do_shortcode('[wp_ulike_counter]'); ?></span>
					</div>
				</div>

				<?php
					}
					wp_reset_postdata();

				?>


			<!-- <div class="petition col-xl-4 col-md-6">
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
	</div>
<?php get_footer() ?>