<?php get_header(); ?>


    <main class="m-container">

        <?php if( have_posts() ): while (have_posts() ): the_post(); ?>
     
        <?php get_template_part('templet-parts/content'); ?>

        <?php endwhile; ?> <?php else: ?>

          <?php get_template_part('templet-parts/content' , 'none') ?>

        <?php endif; ?>
        </main>
    
<p>single.php</p>
<?php get_sidebar(); ?>

<?php get_footer(); ?>