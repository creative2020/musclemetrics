<?php
/*
 * Template Name: Home
 */
get_header(); ?>

<main>

    <div class="row main-slider-row">
        <?php echo do_shortcode("[metaslider id=23]"); ?>
    </div>

    <div class="row home-headlines">
        <div class="col-xs-6 col-sm-3">
            <a href="/blog">
                <p class="head">Health, Fitness & Nutrition</p>
            </a>
            <div class="content">
                <p class="headsub">News and Advice:</p>
                <?php echo do_shortcode('[tt_posts limit="3" cat="-7" layout="list"]'); ?>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <a href="/events">
                <p class="head">Next Event Location</p>
            </a>
            <div class="content">
                <p class="headsub">Come check us out.</p>
                <?php echo fwp_display_next_event();
                ?>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <a href="/category/video">
                <p class="head">Videos</p>
            </a>
            <div class="content">
                <?php echo do_shortcode('[tt_posts limit="1" cat_name="video" layout="list-video"]'); ?>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <p class="head">Newsletter Signup</p>
            <div class="content">
                <p class="headsub">Muscle Matters 1x per month</p>
                <div class="nl-form"><?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true" tabindex="88"]'); ?></div>
            </div>
        </div>
    </div>

    <div class="row" id="tt-sidebar-home-row2">
        <?php get_template_part('section', 'row2'); ?>
    </div>

</main>

<?php get_footer(); ?>