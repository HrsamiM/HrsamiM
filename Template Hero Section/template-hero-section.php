<?php
/**
* Template Name: Sectores Template
*
*/
get_header(); 

/*Global Vars */
$headingTitle = get_the_title();
?>

<?php
  	if ( has_post_thumbnail() ) {
    	$imageBnnr = get_the_post_thumbnail_url();
  	}
	else {
  		$imageBnnr = get_stylesheet_directory_uri().'/assets/media/bnner-df.jpg';
	}
?>
  
<div class="hero-section" style="background-image: url(<?php echo esc_url($imageBnnr); ?>);">
	<div class="container content-box">
		<div class="row">
			<div class="col-12">
				<?php echo '<h1 class="display-5 fw-bold lh-1 mb-3 heading">'.esc_html($headingTitle).'</h1>'; ?>
				<span class="text-center hrm-bcshrt"><?php do_shortcode('[breadcrumbs]'); ?></span>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>