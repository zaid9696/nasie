
<section class="content">

	<h3 class="title"> منوعات</h3>


	<div class="content__articles">
		
	
	<?php   

			$postQuery = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '3', 'category__in' => '4' ));

			while ($postQuery->have_posts()) { 

					$postQuery->the_post();

				?>

		<div class="content__header">

			<div class="content__header-item">

				<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title();?>">				
				<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			</div>

			
		</div>

		


	<?php } ?>
	</div>

	<div class="more">
		<a href="<?php echo get_term_link(4) ?>">عرض المزيد</a>
	</div>

</section>