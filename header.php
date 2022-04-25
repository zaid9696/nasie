<!DOCTYPE html>
<html  dir="rtl" lang="ar" >
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-54KBHVX');</script>
<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54KBHVX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<nav class="nav">
  
	<div class="nav__logo">

        <a href="<?php echo get_site_url('/');?>">
            <img class="nav__logo-img" src="<?php
             echo wp_get_attachment_url( get_theme_mod('basic-homepage-callout-image') ); ?>" alt="Logo">
        </a>
    
    </div>

	<div class="custom-wordpres-dropdown">
		
            <?php 
            
                wp_nav_menu( array(
                    'theme_location' => 'primary'
                ) );

            ?>
	<div class="cancel-btn"><img src="<?php echo get_theme_file_uri('/img/cancel.svg'); ?>" alt="cancel"></div>
	</div>

	<div class="custom-btn"><img src="<?php echo get_theme_file_uri('/img/menu.svg'); ?>" alt="Menu"></div>

	 <div class="nav__search">
      <img src="<?php echo get_theme_file_uri('/img/search.svg') ?>" alt="Search Icon">
  </div>


</nav>

    
