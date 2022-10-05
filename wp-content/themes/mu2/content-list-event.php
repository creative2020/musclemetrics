<?php
// pull meta for each post
$post_id = get_the_ID();
$post_thumbnail_id = get_post_thumbnail_id($post_id);
$post_thumbnail_url = wp_get_attachment_image_src($post_thumbnail_id, 'medium');
$post_thumbnail_url_tn = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail');
$permalink = get_permalink($id);
$title = get_the_title($id);

// get event start date
$start_date = fwp_get_start_date($post_id);


// post thumbnail or default
$image = get_the_post_thumbnail(
	$post_id,
	'medium',
	['class' => 'img-responsive']
);
echo "<!-- image: " . $image . " -->\n";
?>

<a href="<?php echo $permalink ?>">
	<div id="tt-list-event" class="row">
		<?php if (empty($image)) {
			$next_col_size = '12';
		} else { ?>
			<div id="tt-list-img" class="col-sm-3">
				<?php echo $image; ?>
			</div>
			<?php $next_col_size = '9'; ?>
		<?php } ?>
		<div id="<?php echo the_title() ?>" class="col-sm-<?php echo $next_col_size; ?>">
			<div>
				<h5 style="color:white;"><?php echo $start_date; ?></h5>
				<h2 style="margin-bottom:5px;"><?php echo $title; ?></h2>
			</div>
		</div>
		<div id="tt-event-btn" class="col-sm-12 mt-4">
			<?php echo do_shortcode('[tt_btn link="' . $permalink . '" block="y"]Register[/tt_btn]'); ?>
		</div>

	</div>
</a>