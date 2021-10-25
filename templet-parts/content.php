<section class="common-elemnt">
            <img src="<?php get_template_directory_uri(); ?>/images/about.png" alt="">
            <div class="elemnt-txt">
            <?php the_title( '<h1>', '</h1>'); ?>
            <?php the_content(); ?>
            <h3><?php esc_html_e('Date:'); ?> <?php the_time(); ?></h3>
          
            </div>
        </section>