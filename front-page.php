<?php 

    get_header( );

?>

	<?php echo get_template_part('/inc/templates/hero')  ?>
	<main class="body">
		
	  <aside>

	   <?php echo get_template_part('/inc/templates/latest-posts')  ?>
	   <?php echo get_template_part('/inc/templates/most-read')  ?>

	  </aside>
	 <section>
	<?php echo get_template_part('/inc/templates/mixed-content')  ?>
	<?php echo get_template_part('/inc/templates/health-content')  ?>
	<?php echo get_template_part('/inc/templates/self-development-content')  ?>
	 	
	 </section>

	</main>

<?php 

    get_footer();

?>

