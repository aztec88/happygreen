<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <?php wp_head(); ?>


    <meta name="viewport" content="width=device-width">
</head>
<body <?php body_class(); ?>>
<div class="container-fluid top_contact">
    <div class="container">
        <div class="nav_contact no-gutters">

            <ul class="nav_contact_left">
                <li><a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i> +143242523452</a></li>
                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> info@happygreen.com</a></li>
            </ul>

            <ul class="nav_contact_right">
                <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
            <ul>

        </div>
        
    </div>
</div>
         
<div class="container">
  <div class="row">
    <div class="logo col-6">
        <a href="<?php echo home_url(); ?>"><img title="Happy Green" alt="Happy Green" src="/wp-content/themes/wp-theme/images/logo.png"></a>
    </div>
    <div class="menu_right col-6">
        <div class="secondary_menu">
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'secondary',
                    'container' => false,
                    'menu_class' => 'second_menu'
                    )
                );
            ?>	
            <form role="search" method="get" class="woocommerce-product-search" action="<?php echo home_url(); ?>">
                <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products…" value="" name="s">
                <button type="submit" value="Search"><i class="fa fa-search" aria-hidden="true"></i></button>
                <input type="hidden" name="post_type" value="product">
            </form>
        </div>
    </div>
  </div>
</div>
<div class="container main_site_menu">
  <div class="row">
    <div class="logo col-6">
    <?php 
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'main_menu'
            )
        );
    ?>	
    </div>
    <div class="menu_right col-6">
        <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
    </div>
  </div>
</div>
        
        

        
     	
       
