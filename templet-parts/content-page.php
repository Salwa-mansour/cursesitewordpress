<section class="common-elemnt "  id="post-<?php the_ID(); ?>" >
            <img src="<?php get_template_directory_uri(); ?>/images/about.png" alt="">
            <div class="elemnt-txt">
            <?php the_title( '<h1>', '</h1>'); ?>
            <?php the_excerpt();  ?>
            <!-- <h3>Call Newport</h3> -->

          <a href="<?php echo esc_url(get_the_permalink()); ?>" class="common-border" >Read more</a> 
       
           <!-- <button class="common-border">Read More</button> -->
            </div>
        </section>