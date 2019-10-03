<!-- this is our header template file -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="nav-logo"><img class="nav-logo-img" src="<?php bloginfo('template_url')?>/images/NN_Logo_JustN.png"></div>
            <?php
                wp_nav_menu($arg = array(
                    'menu_class' => 'nav-ul',
                    'theme_location' => 'primary'
                ));
            ?>
            
            
            <!-- <ul class="nav-ul nav-ul-blk">

                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a>The Lab</a></li>
                <li><a>About</a></li>
                <li><a>Contact</a></li>
            </ul> -->
        </nav>
    </header>