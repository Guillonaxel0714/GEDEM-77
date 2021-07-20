<?php
/**
 * Header template
 * 
 * 
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset= "<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <?php wp_head(); ?>
</head>
<body>
    <?php if ( is_front_page() ) : ?>
        <div class="img_home" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"> 
            <header class="header">
                <nav class="nav-bar">
                    <div class="logo_nav">
                        <?php
	        		    	if ( is_front_page() ) : ?>
	        		    		<img class="nav-logo" src="<?php echo get_theme_mod( 'gedem_logo_nav-menu' ); ?>" alt="logo GEDEM">
                            <?php
	        		    	else : ?>
	        		    		<a href="<?php echo home_url(); ?>">
	        		    			<img class="nav-logo" src="<?php echo get_theme_mod( 'gedem_logo_nav-menu' ); ?>" alt="logo GEDEM">
	        		    		</a>
	        		        <?php
	        		    	endif;
	        		    ?>
                    </div>
                    <div class="hamburger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                    <?php 
                        wp_nav_menu(
                            [
                            'theme_location' => 'main-nav',
                            'container'     => '',
                            'menu_class'    => 'nav-links',
                            ]
                        ); 
                    ?>
                </nav>
            </header> 
            <div class="title_home">
                <h1><?php bloginfo('name'); ?></h1>
                <h2><?php bloginfo('description'); ?></h2>
                <h4 id="writter_txt"></h4>
            </div>
            <a href="#about">
                <div class="scroll_down"></div>
            </a>
        </div>     
        <?php
        else : ?>
            <header class="header">
                <nav class="nav-bar">
                    <div class="logo_nav">
                        <?php
	        		    	if ( is_front_page() ) : ?>
	        		    		<img class="nav-logo" src="<?php echo get_theme_mod( 'gedem_logo_nav-menu' ); ?>" alt="logo GEDEM">
                            <?php
	        		    	else : ?>
	        		    		<a href="<?php echo home_url(); ?>">
	        		    			<img class="nav-logo" src="<?php echo get_theme_mod( 'gedem_logo_nav-menu' ); ?>" alt="logo GEDEM">
	        		    		</a>
	        		        <?php
	        		    	endif;
	        		    ?>
                    </div>
                    <div class="hamburger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                    <?php 
                        wp_nav_menu(
                            [
                            'theme_location'    => 'main-nav',
                            'container'         => '',
                            'menu_class'        => 'nav-links',
                            ]
                        ); 
                    ?>
                </nav>
            </header> 
        <?php
        endif;
    ?>

    <a href="#" class="return-to-top"><i class="fas fa-arrow-up"></i></a>

    <main>

