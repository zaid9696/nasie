<?php

require get_template_directory(  ). '/inc/theme-options.php';
require get_template_directory(  ). '/inc/enqueue.php';
require get_template_directory(  ). '/inc/customize-homapage.php';
require get_template_directory(  ). '/inc/search-route.php';
require get_template_directory(  ). '/shortcode.php';

new Customize_homepage();