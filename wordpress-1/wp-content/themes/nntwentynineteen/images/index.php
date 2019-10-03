<?php

/* Main Template File */
    get_header();

?>

<div class="main-content-width-container">
    <div class="one-column-entry">
        <h1 class="main-content-h1-title"><?php echo get_the_title()   ?></h1>
        <h5 class="main-content-h5-subtitle">Subheading</h5>
            <main class="main-content">
                <!-- a wordpress loop that queries the posts  -- this is for the blog page -->
                    <?php
                        // Start the loop
                        if (have_posts()) :
                            while (have_posts()) :
                                the_post();
                                    the_content();
                            endwhile;
                        endif;
                    ?>
            </main>
    </div>
</div>


<?php get_footer(); ?>