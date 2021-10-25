<?php get_header(); ?>


    <main class="m-container">
  


        <?php if( have_posts() ): while (have_posts() ): the_post(); ?>
     
        <?php get_template_part('templet-parts/content','page'); ?>

        <?php endwhile; ?> <?php else: ?>

          <?php get_template_part('templet-parts/content' , 'none') ?>

        <?php endif; ?>


            <?php echo 'blog here'; ?>

      
    </main>


<?php get_sidebar(); ?>

<?php get_footer(); ?>