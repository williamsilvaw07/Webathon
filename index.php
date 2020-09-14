<?php

wp_enqueue_style('style', get_stylesheet_uri() );
get_header();


?>



<section class="main">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post-header">
            <div class="date"><?php the_time( 'M j y' ); ?></div>
            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <div class="author"><?php the_author(); ?></div>
        </div>
        <!--end post header-->
        <div class="entry clear">
            <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
            <?php the_content(); ?>
            <?php edit_post_link(); ?>
            <?php wp_link_pages(); ?> </div>
        <!--end entry-->
        <div class="post-footer">
            <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
        </div>
        <!--end post footer-->
    </div>
    <!--end post-->
    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
        <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
        <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div>
    <!--end navigation-->
    <?php else : ?>
    <?php endif; ?>
    <div class="landing_page">
    </div>
    <div class="landing_page_text">

        <h1>Your new website<br>Solution</h1>
        <h3>Become <span class="orange_text">successful</span> with our<br> integrated web packages</h3>
        <a href="#"><button class="button_class">Learn more
            </button></a>
    </div>

    <div class="circel_grid">
        <div class="middle_circle1 circle">
            <img id="Webathon_segment" src="<?php echo get_template_directory_uri() ?>/Pictures/Webathon_segment.png" alt='Webathon segment'>
            <p> <span class="bold_span">Segment</span> your date effectively</p>
        </div>

        <div class="middle_circle2 circle">

            <img id="Webathon_distribute" src='<?php echo get_template_directory_uri() ?>/Pictures/Webathon_distribute.png' alt="Webathon distribute">
            <p> <span class="bold_span">Distribute</span> tasks to your team</p>
        </div>


        <div class="middle_circle3 circle">
            <img id="Webathon_manage" src="<?php echo get_template_directory_uri() ?>/Pictures/Webathon_manage.png" alt="Webathon manage">
            <p> <span class="bold_span">Manage</span> your workflow </p>
        </div>


    </div>






    <div class="grid_section">

        <div class="col_two">
            <h1>Increase output<br> efficiency</h1>
            <p>Our web products bring your online presence to the 21st century. No more degradation of work output</p>

        </div>


        <div class="col_two">
            <img src="<?php echo get_template_directory_uri() ?>/Pictures/Webathon_tech%20girl.png" alt="girl on laptop">

        </div>


    </div>








    <div class="grid_color">
        <div class="grid_section second_grid">




            <div class=" second_img_col col_two ">
                <img src="<?php echo get_template_directory_uri() ?>/Pictures/Webathon_family%20around%20computer.png" alt="family around computer">

            </div>

            <div class="col_two second_col second_text">
                <h1>Earn the respect<br> of your peers</h1>
                <p>9 in 10 of our customers report a stronger reputation among their colleagues, friends and family.</p>

            </div>
        </div>
    </div>






    <div class="grid_section last_grid">

        <div class="col_two">
            <h1>Follow your<br> dreams</h1>
            <p>The tide is high and you're holding on. we want to be your number one web service provider.</p>

        </div>


        <div class="col_two">
            <img src="<?php echo get_template_directory_uri() ?>/Pictures/Webathon_handshake.png" alt="handshake">

        </div>


    </div>





</section>
<script src="js/scripts.js"></script>
<?php
get_footer();
