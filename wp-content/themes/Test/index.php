<?php get_header() ?>

	<div class="container content">
		<div class="row">
			<div class="invite col-3">
				<a href="/vydvizhenie-peticzii/">Выдвинуть инициативу</a>
			</div>
		</div>
		<div class="title-actual">
			<h3>Актуальное</h3>
			
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
					<div class="address">Город: <?php the_category('','single'); ?> <img src="<?php echo bloginfo('template_url'); ?>/assets/img/fire.png" alt="" height="35px" width="auto"></div>
					<div class="like">
						<span class="img-like"><i class="fa fa-heart" aria-hidden="true" style="color:red;"></i><span class="number"><?php echo do_shortcode('[wp_ulike_counter]'); ?></span></span>
						<span class="img-comment"><i class="fa fa-comment " aria-hidden="true"></i><span class="number"><?php echo comments_number(0,1,'%'); ?></span></span>
					</div>
				</div>

				<?php
					}
					wp_reset_postdata();

				?>
				<div class="news">
					<h2 >Новости</h2>
						<div class="row">
							<?php 
							$posts = get_posts( array(
								'numberposts' => -1,
								'category'    => 19,
								'orderby'     => 'date',
								'order'       => 'DESC',
								'post_type'   => 'post',
								'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
							) );

					foreach( $posts as $post ){
						setup_postdata($post);
					    // формат вывода the_title() ...
					    ?>

					    <div class="news-list col-4">
							<div class="news-text">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<p><?php the_content(); ?></p>
							</div>
						</div>
					<?php
						}
						wp_reset_postdata();

					?>

						<!-- <div class="news-list col-4">
							<div class="news-text">
								<h3>Title</h3>
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate, ab rem officia veniam eius molestiae deserunt asperiores!
								</p>
							</div>
						</div>
						<div class="news-list col-4">
							<div class="news-text">
								<h3>Title</h3>
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate, ab rem officia veniam eius molestiae deserunt asperiores!
								</p>
							</div>
						</div>
						<div class="news-list col-4">
							<div class="news-text">
								<h3>Title</h3>
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate, ab rem officia veniam eius molestiae deserunt asperiores!
								</p>
							</div>
						</div>
						<div class="news-list col-4">
							<div class="news-text">
								<h3>Title</h3>
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate, ab rem officia veniam eius molestiae deserunt asperiores!
								</p>
							</div>
						</div>
						<div class="news-list col-4">
							<div class="news-text">
								<h3>Title</h3>
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate, ab rem officia veniam eius molestiae deserunt asperiores!
								</p>
							</div>
						</div>
						<div class="news-list col-4">
							<div class="news-text">
								<h3>Title</h3>
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate, ab rem officia veniam eius molestiae deserunt asperiores!
								</p>
							</div>
						</div>
					 -->
					</div>
				</div>
				

		</div>				
	</div>
<?php get_footer() ?>