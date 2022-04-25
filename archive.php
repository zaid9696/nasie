<?php 

    get_header( );

   

?>
	
	<div class="archive">
		
        <h2 class="archive__title">
            <?php the_archive_title(); ?>
        </h2>

        <div class="archive__cards">
        	
        	<?php 

        		while (have_posts()) {
        			the_post();
        			?>

        	<div class="archive__card">

        		<div class="archive__card-img">
        			<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
        		</div>

        		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        		<p>
        			<a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_content(), 25, '...') ?></a>
        		</p>




        	</div>


        <?php
        		}

        	?>

        </div>

          <div class="paginate">
        <?php 

        echo paginate_links();
        ?>
        </div>

	</div>


<?php 


    get_footer( );

?>
