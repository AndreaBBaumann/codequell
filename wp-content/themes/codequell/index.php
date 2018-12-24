<?php get_header();?>

<div id="main_wrapper">
    <main id="main">
        <p>index.php</p>
        <p>CodeQuell</p>
    </main>
    
    <div class="slider">
        <?php
        $args = array(
            posts_per_page => -1
        );
        
        $loop = new WP_Query($args);
        
        if($loop->have_posts()): while ($loop->have_posts()): $loop->the_post(); ?>
            <div><?php the_post_thumbnail( 'max-thumb' );	the_content();?></div>
        <?php endwhile; else: ?>
        <?php endif; wp_reset_postdata();?>
        
    </div>
    
    <!--<div class="prev">Vorheriges</div>-->
    <!--<div class="next">Nächstes</div>-->
    
    <!-- Versuch -->
    <div class="slider-control">
        <div class="prev slick-arrow" style="display: block;">
            <span class="slider-prev js-slick-prev direct-prev">
                <span class="invisible">Zurück</span>
            </span>
        </div>

        <div class="next slick-arrow" style="display: block;">
            <span class="slider-next js-slick-next direct-next">
                <span class="invisible">Vorwärts</span>
            </span>
        </div>
    </div>
    <!-- Versuch -->
    
    
</div>

<?php get_footer();?>