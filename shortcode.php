
<?php 

function testCode(){ ?>
	

	<div class="page__about">
		
		<div class="page__header">
			<img src="<?php echo get_theme_file_uri('/img/wave.svg') ?>" alt="wave background">
		</div>
		<h1>من نحن</h1>

		<p>
			
			موقع ناسع ينشرأهم وأفضل المقالات المترجمة عن الصحة, الثقافة, التعليم, التاريخ, و التنمية الذاتية. موقع ناسع ينشر المقالات بشكل يومي.
 أخبرنا آرائك واقتراحاتك عن موقع ناسع من خلال هذا البريد الإلكتروني: nasiesite@gmail.com
		</p>


	</div>




	

<?php

};


add_shortcode( 'test_code', 'testCode' );
