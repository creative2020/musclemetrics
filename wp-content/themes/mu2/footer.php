<footer id="footer">

<div class="row" id="tt-sidebar-home-row3">
    <?php get_template_part('section', 'row3'); ?>
</div>

<div class="row" id="tt-sidebar-home-row4">
		<div class="col-sm-3">
			<?php echo do_shortcode('[tt_img id="203" link="/sponsor/dari/" responsive=true]'); ?>
			<div style="height: 2rem;"></div>
			<?php echo do_shortcode('[tt_img id="148" link="/sponsor/ats-heart-check/" responsive=true]'); ?>
			<div style="height: 2rem;"></div>
			<?php echo do_shortcode('[tt_img id="185" link="https://www.athletenetwork.com/" responsive=true]'); ?>
		</div>
		<div class="col-sm-3">
			<h4>Muscle Metrics is a proud member of these fine organizations:</h4>
			<a href="http://acsm.org/" style="display: flex; align-items: center;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/acsm.jpg" style="width: 6rem; flex-shrink: 0;" />
				<span style="margin-left: 1rem;">American College of Sports Medicine</span>
			</a>
			<a href="https://www.nsca.com/" style="display: flex; align-items: center; margin-top: 1rem;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/nsca.png" style="width: 6rem; flex-shrink: 0;" />
				<span style="margin-left: 1rem;">National Strength and Conditioning Association</span>
			</a>
			<a href="http://www.physicalfitness.org/" style="display: flex; align-items: center; margin-top: 1rem;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/nahf.png" style="width: 6rem; flex-shrink: 0;" />
				<span style="margin-left: 1rem;">National Association for Health and Fitness</span>
			</a>
			<a href="http://www.nata.org/" style="display: flex; align-items: center; margin-top: 1rem;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/nata.png" style="width: 6rem; flex-shrink: 0;" />
				<span style="margin-left: 1rem;">National Athletic Trainers Association</span>
			</a>
			<a href="http://www.maatad5.org/" style="display: flex; align-items: center; margin-top: 1rem;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/maata.png" style="width: 6rem; flex-shrink: 0;" />
				<span style="margin-left: 1rem;">Mid-America Athletic Trainers Association</span>
			</a>
			<a href="http://ksathletictrainers.org/" style="display: flex; align-items: center; margin-top: 1rem;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/kats.jpg" style="width: 6rem; flex-shrink: 0;" />
				<span style="margin-left: 1rem;">Kansas Athletic Trainers Association</span>
			</a>
			<a href="http://www.kcchamber.com/" style="display: flex; align-items: center; margin-top: 1rem;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/kccc.png" style="width: 6rem; flex-shrink: 0;" />
				<span style="margin-left: 1rem;">Greater Kansas City Chamber of Commerce</span>
			</a>
			<a href="http://www.wearehealthykc.com/" style="display: flex; align-items: center; margin-top: 1rem;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/healthykc.png" style="width: 6rem; flex-shrink: 0;" />
				<span style="margin-left: 1rem;">Healthy KC</span>
			</a>
		</div>
		<div id="review-list" class="col-sm-3">
			<h2>Review</h2>
			<?php echo do_shortcode('[tt_posts limit="5" cat="-7" cat_name="review" layout="list-noimg"]'); ?>
			<a href="/category/review/"><p>View all</p></a>
		</div>
		<div id="review-list" class="col-sm-3">
			<h2>Research</h2>
			<?php echo do_shortcode('[tt_posts limit="5" cat="-7" cat_name="research" layout="list-noimg"]'); ?>
			<a href="/category/research/"><p>View all</p></a>
		</div>
</div>

<?php
    dynamic_sidebar('tt-sidebar-footer-c');

    dynamic_sidebar('tt-sidebar-footer-b');

    get_template_part('section', 'footer-contact');
?>

    <div id="footer-bloginfo" class="row">
        <span id="footer-bloginfo-name">
            &copy;<?php echo date('Y'); ?>
            <?php echo bloginfo('name'); ?>
        </span>
        <?php echo bloginfo('description'); ?>
    </div>

</footer>

</div><!-- /.container -->

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-9064605-18', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
