<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">

        <div class="swiper-container">
             
            <div class="swiper-wrapper">
            <?php
                $args = array(
                'post_type'=>'promo',
                'order'    => 'DESC'
                );              
                        
                $the_query = new WP_Query( $args );
                if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                
            ?>
                <div class="swiper-slide">
                    <?php the_post_thumbnail('', array('class' => 'img-fluid')); ?>
                    <div class="slider_info">
                        <h1 class="slider_title"><?php the_title(); ?></h1>
                        <h3 class="slider_text"><?php the_content(); ?></h3>
                    </div>
                </div>
                <?php 
                endwhile;
                endif;

                    // Reset Query
                    wp_reset_query();
                ?>
            </div>
            
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"><i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
            <div class="swiper-button-prev"><i class="fa fa-angle-double-left" aria-hidden="true"></i></div>
            
        </div>
    </div>
</div>
	<div class="container">
        <div class="row">
            <div class="header_title">
                <h2>New in</h2>
            </div>
            <div class="best_selling">
                <?php echo do_shortcode('[recent_products limit="4"]'); ?>
            </div>
        </div>
    </div>
	<div class="container">
        <div class="row">
            <div class="header_title">
                <h2>Categories</h2>
            </div>
            <div class="best_selling">
                <?php echo do_shortcode('[product_categories]'); ?>
            </div>
        </div>
    </div>
	<div class="container">
        <div class="row">
            <div class="header_title">
                <h2>On sale</h2>
            </div>
            <div class="best_selling">
                <?php echo do_shortcode('[sale_products limit="4"]'); ?>
            </div>
        </div>
    </div>
	<div class="container">
        <div class="row">
            <div class="header_title">
                <h2>We recommend</h2>
            </div>
            <div class="best_selling">
                <?php echo do_shortcode('[featured_products limit="4"]'); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>