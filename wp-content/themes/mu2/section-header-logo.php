<div class="row" id="logo-row">
    <div class="col-xs-12 col-sm-4 logo-col">
        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" />
    </div>
    <div class="col-xs-12 col-sm-2">
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="row">
            <div class="col-xs-12 hidden-xs" style="height: 5rem;">
                <?php // echo do_shortcode('[tt_img id="185" link="https://www.athletenetwork.com/" responsive=true target="_blank"]'); ?>
            </div>
        </div>
        <!--<div class="row" style="margin-top: 1rem;">-->
        <div class="row" style="margin-top: 1rem;">
            <div class="col-xs-8 col-xs-offset-4">
                <p style="text-align: right; font-size: 200%; font-family: oswald; color: #003556;">The <span style="color: #8E734E;">GOLD Standard</span> in Body Composition Measurement</p>
            </div>
        </div>
    </div>
</div>

<?php

$i = get_theme_mod( 'header-img' );
if ( ! empty( $i ) ) {
    ?><img class="center-block" src="<?php echo $i; ?>"><?php
}
