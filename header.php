<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php wp_head(); // loads several functions including wp_enqueue_scripts ?>
    <title></title>
</head>
<body>
    <header class="site-header">
        <div class="container header-grid">
            <div class="navigation-bar"> 
               <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"  alt="Site Logo">    
                    </a>
                
                </div><!--. logo-->
            
                    <?php
                    $args = array(
                    'theme_location' => 'main-menu',
                    'container'=> 'nav',
                    'container_class'=> 'main-menu'
                    );
                    wp_nav_menu($args);
                    ?>
            </div><!--.navigation-bar-->
        </div><!--.container-->

    </header>    
</body>
</html>
