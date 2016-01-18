<footer id="footer">

<div class="row" id="tt-sidebar-home-row3">
    <?php get_template_part('section', 'row3'); ?>
</div>

<div class="row" id="tt-sidebar-home-row4">
		<div class="col-sm-3">
			<?php echo do_shortcode('[tt_img id="203" link="/sponsor/dari/" responsive=true]'); ?>
		</div>
		<div class="col-sm-3">
			<?php echo do_shortcode('[tt_img id="148" link="/sponsor/ats-heart-check/" responsive=true]'); ?>
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
