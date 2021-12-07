<?php
  	if ( has_post_thumbnail() ) {
    	$imageBnnr = get_the_post_thumbnail_url();
  	}
	else {
  		$imageBnnr = get_stylesheet_directory_uri().'/assets/media/bnner-df.jpg';
	}
?>
  
<div class="container-fluid hero-section" style="background-image: url(<?php echo $imageBnnr; ?>);">