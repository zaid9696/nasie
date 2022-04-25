<?php 

    get_header( );


    while(have_posts(  )){
        the_post();


?>



 <h1 class="page__title"><?php the_title(); ?></h1>


<div class="page__content"><?php the_content(); ?></div>



<?php 

    };

    get_footer( );

?>
