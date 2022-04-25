
<section class="healthContent">

	<h3 class="title"> صحة</h3>


	<div class="healthContent__articles">
		
	
	<?php   

			$postQuery = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '3', 'category__in' => '5' ));

			while ($postQuery->have_posts()) { 

					$postQuery->the_post();

				?>

		<div class="healthContent__header">

			<div class="healthContent__header-item">

				<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title();?>">				
				<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			</div>

			
		</div>

		


	<?php } ?>
	</div>

	<div class="more">
		<a href="<?php echo get_term_link(5) ?>">عرض المزيد</a>
	</div>

</section>