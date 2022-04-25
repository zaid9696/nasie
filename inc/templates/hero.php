
<div class='hero'>

	<div class="owl-one owl-carousel owl-theme">
		
		<?php   

			$postQuery = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '3', 'category__in' => '8' ));

			while ($postQuery->have_posts()) { 

					$postQuery->the_post();

				?>

				<div class="hero__cover">

					<div class="hero__overlay"></div>
					<div class="hero__img">
					<img src="<?php echo get_the_post_thumbnail_url()?>" alt="page cover">
						
					</div>
					
					
				<div class="hero__content">
					
					<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				</div>
				</div>




		<?php	} ?>

	</div> 	


</div>