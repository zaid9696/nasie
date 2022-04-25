<?php 

    get_header( );


    

    while(have_posts(  )){
        the_post();

        setPostViews(get_the_ID());


?>


 <header class="header">

        <div class="header__img-cover">
            
        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt='<?php the_title() ?>'>
        </div>


        <h1 class="header__title"><?php the_title(); ?></h1>

        <div class="header__info">

            <div class="header__info-icon">
                
                <img src="<?php echo get_theme_file_uri('/img/calendar.svg') ?>" alt="Date Icon">
                <span> <?php the_time( 'd F Y' ); ?> </span>

            </div>

            <div class="header__info-icon">
                
                <img src="<?php echo get_theme_file_uri('/img/book-reader.svg') ?>" alt="Reading Time Icon">
                <span> <?php echo get_field('reading_time') ?> دقائق قراءة </span>

            </div>

            <div class="header__info-icon">
                
                <img src="<?php echo get_theme_file_uri('/img/category.svg') ?>" alt="Reading Time Icon">
                <span> <?php  

                    $category = get_the_category();

                    foreach ($category as $cat) {
                        
                        if($cat->name != 'featured'){

                            $catLink = $cat->term_id;
                            $catName = $cat->name 
                            ?>

                            <a href="<?php echo get_category_link($catLink) ?>"> <?php echo $catName ?></a>


                    <?php    }


                    }


                ?> </span>

            </div>
            
        </div>

 </header>





<main class="main">


    <article class="main__article-content">
         
        <?php the_content(); ?>

     </article>

     <section class="tags">

        <div class="tag">
            
        <?php

            $tags = get_the_tags();

            if($tags){

                foreach ($tags as $tag) {

                    ?>
                    
                    <span><a href="<?php echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name ?></a></span>

               <?php
                }
                
                }
         ?>

        </div>

        <div class="source">
            <a href="<?php echo get_field('source') ?>" target="_blank">المصدر</a>
        </div>


     </section>

     <section class="readMore">
         
        <h2><span> إقرأ </span>  أيضاً</h2>

        <div class="cards">
        <?php

            $category = get_the_category();

            foreach ($category as $cat ) {
                
                if($cat->term_id != 8){

                    $catLink = $cat->term_id;
                    $catName = $cat->name;
                }
            }

            $currentPost = get_the_ID();

            $args = array(

            'posts_per_page' => '3',
            'post__not_in' => array($currentPost),
            'cat' => $catLink,
            );

            $categoryPosts = get_posts($args);

            foreach ($categoryPosts as $post) : setup_postdata($post)

         ?>

         <div class="card">

             <div class="card_img">
                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
            </div>

            <h3 class="card_title">
                
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            </h3>

         </div>

         <?php 

            endforeach;
            wp_reset_postdata();
            ?> 
        </div>
     </section>
      
</main>

<!-- <div class="main__article-comments">
          <?php 

      
           // if(comments_open()){

            //    comments_template();

           // } 

    
                ?>
</div> -->

    













<?php 

    };
    wp_reset_postdata();

    get_footer( );

?>
