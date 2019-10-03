<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 */
    get_header();
?>

<div class="main-content-width-container">
<h1>test</h1>
        <!-- <h1 class="main-content-h1-title"></h1> -->
        <h1><?php echo get_the_title() ?></h1>
        <!-- <h5 class="main-content-h5-subtitle"></h5> -->
        <main class="main-content">
        <?php 
            // Start the loop
            if (have_posts()) :
                while (have_posts()):
                    the_post();
                            the_content();
                endwhile;
            endif;
        ?>
            <!-- <img class="main-content-hero-pic" src="https://placezombie.com/640x360">
            <h4 class="main-content-p-text"></h4> -->
        </main>
    </div>
    
    <?php get_footer(); ?>