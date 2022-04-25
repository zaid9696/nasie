<div class="mostRead">
	
	<h2>الأكثر قراءة</h2>

	 <?php 

	        
	       $mostread = new WP_Query( array(
	            'meta_key' => 'post_views_count',
	            'orderby' => 'meta_value_num',
	            'posts_per_page' => 3
	        ) ); 

            if($mostread){


            while($mostread->have_posts()){
                $mostread->the_post(); ?>


                <div class="mostRead__item">
                	
                	<img src="<?php echo get_the_post_thumbnail_url()?>" alt="<?php the_title() ?>">

                	<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>

                </div>


         <?php 

         		}
         	}

         ?>




</div>