        <footer>
        
        <section class="ft-legal">

            <ul class="ft-legal-list">
                <li><a href="#">terms &amp; condtions</a></li>
                <li><a href="#">privacy policy</a></li>
                <?php
                if( is_active_sidebar( 'footer-widget' ) ):
                dynamic_sidebar( 'footer-widget' ); 
                endif;
                ?>


                <li> &copy; 2020 copyright inc.</li>
            </ul>
            
        </section>

        </footer> 

 

    </div><!-- content -->

    </div><!-- #page -->
    <?php  wp_footer(); ?>
</body>
</html>