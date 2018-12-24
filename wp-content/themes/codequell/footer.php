<div id="footer_wrapper">
            <footer id="footer">
                <p>CodeQuell</p>
            </footer>
        </div>
            
        
        <?php wp_footer(); ?>

        <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/slick.js"></script>
        
        <script>
            jQuery(document).ready(function(){
                jQuery('.slider').slick({
                  /*autoplay: true,*/
                  dots: true,
                  infinite: true,
                  speed: 500,
                  fade: true,
                  cssEase: 'linear',
                    prevArrow: jQuery('.prev'),
      nextArrow: jQuery('.next'),
                    
                });
            });
        </script>
    </body>
</html>