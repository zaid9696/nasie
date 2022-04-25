<div class="latest">
	
	<h2>الأحدث</h2>

	<div class="latest__content">

		<?php 
			$latestPosts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '3' )); 

			if($latestPosts->have_posts()){

				while ($latestPosts->have_posts()) {
					$latestPosts->the_post() ?>

					<div class="latest__item">
					<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>

					<div class="latest__date">
						
							<?php 
		        			echo 'منذ '  . human_time_diff( get_the_time('U'), current_time('timestamp') ); 
		    			?>
					</div>

						
					</div>

		<?php  }
			}

		?>
		
	</div>


</div>