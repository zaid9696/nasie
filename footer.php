


<footer class="footer">

    <?php 

    $postQuery = new WP_Query(array(
                            'post_type' => 'social_links',
                            'posts_per_page' => '1',
                        
                        ));

                 while ($postQuery->have_posts()) { 
                    $postQuery->the_post();

    ?>

	<div class="footer__social-icons">
		
		<a href="<?php echo get_field('youtube_link') ?>"  target="_blank"><img src="<?php echo get_theme_file_uri('/img/youtube.svg') ?>" alt="youtube"></a>
		<a href="<?php echo get_field('instagram_link') ?>" target="_blank"><img src="<?php echo get_theme_file_uri('/img/instagram.svg') ?>" alt="instagram"></a>
		<a href="<?php echo get_field('twitter_link') ?>" target="_blank"><img src="<?php echo get_theme_file_uri('/img/twitter.svg') ?>" alt="twitter"></a>
		<a href="<?php echo get_field('facebook_link') ?>" target="_blank"><img src="<?php echo get_theme_file_uri('/img/facebook.svg') ?>" alt="Facebook"></a>

	</div>

    <?php } ?>

	<div class="copy-right">
		© جميع الحقوق محفوظة لموقع  ناسع  –  Nasi’e 2022
	</div>

</footer>


<div class="frontoverlay">

<div class="cancelicon"><img src="<?php echo get_theme_file_uri('/img/cancel-search.svg') ?>" alt="Cancel Icon"></div>

    <form class="frontoverlay__form" autocomplete="off">
            <input type="search"  placeholder="الرجاء البحث هنا" name="search" id="search" class="frontoverlay__form-search">
            <div class="loadicon"><img src="<?php echo get_theme_file_uri('/img/loadicon.svg') ?>" alt="Load Icon"></div>
            <div class="frontoverlay__content">

            </div>
            <!-- <div class="frontoverlay__container">
        <div class="frontoverlay__container-item" style="background-image: url('<?php //echo get_theme_file_uri('/img/img-3.jpg'); ?>')">
            <h3><a href="#">كيف تنتصر على عقلك في بناء عادات صحية جديدة: دراسات باوميستر.</a></h3>
            <p><a href="#">كلام وارين بافيت عن العادات أعتبره من أجمل وأدق الجمل التي وصفت العادات اليومية. فعلاً، في البداية لا تشعر بتكون هذه العادة.. وفجأة تشعر وكأنك في سجن صنعته بنفسك.. مجبر على تكرار هذه العادة سواءً كنت ترغب بذلك أو لا....</a></p>
        </div>
    
        </div> -->
    </form>

  


</div>


<?php wp_footer(); ?>

</body>
</html>