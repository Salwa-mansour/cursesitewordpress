<?php get_header(); ?>


    <main class="m-container">
        <!-- <section class="header">
            <h1>The purpose is teach, bring Education to people</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut fuga excepturi asperiores nostrum error! Ex dignissimos natus vitae labore libero iste non similique doloribus vero soluta consequuntur animi, ea enim, dolorem minus quos cupiditate culpa voluptate expedita sed hic asperiores!</p>
            <button class="common-border">Read More</button>
        </section> -->





        <?php if( have_posts() ): while (have_posts() ): the_post(); ?>
     
        <?php get_template_part('templet-parts/content','page'); ?>

        <?php endwhile; ?> <?php else: ?>

          <?php get_template_part('templet-parts/content' , 'none') ?>

        <?php endif; ?>





        <!-- <section class="common-elemnt">
            <img src="<?php get_template_directory_uri(); ?>/images/course.png" alt="">
            <div class="elemnt-txt">
                <h1>About Us</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi aspernatur unde tempore, consectetur quasi facere illo error alias, placeat atque totam debitis, est aliquid veniam. Harum optio minima esse ratione doloribus? Alias fuga esse sequi ipsa reiciendis molestias impedit dicta!
            </p>
            
            <button class="common-border">Read More</button>
            </div>
           
        </section> -->
        <section id="featurs">
            <div>
                <img src="<?php get_template_directory_uri(); ?>/images/pic-1.png" alt="">
                <h4>Learn Any Where</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, veritatis!</p>
            </div>
            <div>
                <img src="<?php get_template_directory_uri(); ?>/images/pic-2.png" alt="">
                <h4>Learn Any Where</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, veritatis!</p>
            </div>
            <div>
                <img src="<?php get_template_directory_uri(); ?>/images/pic-3.png" alt="">
                <h4>Learn Any Where</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, veritatis!</p>
            </div>
        </section>
        <section class="common-elemnt contact">
            <img src="<?php get_template_directory_uri(); ?>/images/contact.png" alt="">
            <div class="elemnt-txt">
                <h1>Contact Us</h1>
            <form action="">
                <form action="">
                    <input type="text" placeholder="Enter Name">
                    <input type="email" placeholder="Enter Email">
                    <input type="password" placeholder="Enter passward">
            </form>
            <button class="common-border">Read More</button>
            </div>
        </section>
        <div class="social-icons">
            <img src="<?php get_template_directory_uri(); ?>/images/facebook.png" alt="">
            <img src="<?php get_template_directory_uri(); ?>/images/instagram.png" alt="">
            <img src="<?php get_template_directory_uri(); ?>/images/twitter.png" alt="">
            <img src="<?php get_template_directory_uri(); ?>/images/linkedin.png" alt="">
        </div>
    </main>


    <?php echo 'index here'; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>