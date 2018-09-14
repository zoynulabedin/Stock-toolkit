<?php

function stock_slide_shortcode($atts){
	extract(shortcode_atts(array(
		'count'	=>3,
		'slide_id'	=>'',
		'height'	=>'730',
		'loop'	=>'true',
		'autoplay'	=>'true',
		'autoplaytime'	=>'5000',
		'autoplaytimeout'	=>'5000',
		'dots'	=>'true',
		'nav'	=>'true',
	),$atts));

	if($count == 1){
		$q = new WP_Query(array(
		'post_type'=>'slide',
		'post_per_page'=> $count,
		'p'				=>$slide_id,
	));
	}else{
		$q = new WP_Query(array(
		'post_type'=>'slide',
		'post_per_page'=> $count,
	));
	}
	if($count == 1){
		$list ='';
	}else{
		$list ='
	<script>
	jQuery(window).load(function(){
	jQuery(".stock-slides").owlCarousel({
		items:1,
		autoplay:'.$autoplay.',
		loop:'.$loop.',
		nav:'.$nav.',
		autoplayTimeout:'.$autoplaytimeout.',
		dots:'.$dots.',
		navText:["<i class=\'fa fa-angle-left\'></i>","<i class=\'fa fa-angle-right\'></i>"]
	});
	jQuery(".preloader-wrapper").fadeOut();
});
</script>';
	}
	
	
$list .='
	<div style="height:'.$height.'px" class="stock-slides-wrapper">';
	$enable_preloader = cs_get_option('enable_preloader');
	if($enable_preloader = true){}else{
		$list .='
		<div class="preloader-wrapper">
			<div class="loader">Loading...</div>
		</div>';
	}
	

	$list .='
	<div class="owl-carousel stock-slides">
	';
	while($q->have_posts()): $q->the_post();
		$idd = get_the_ID();
		if(get_post_meta($idd,'stock_slide_options',true)){
			$slide_meta = get_post_meta($idd,'stock_slide_options',true);
		} else{
			$slide_meta = array();
		}
		if(array_key_exists('enable_overlay', $slide_meta)){
			$enable_overlay = $slide_meta['enable_overlay'];
		}else{
			$enable_overlay = true;
		}
		if(array_key_exists('overlay_percentage', $slide_meta)){
			$overlay_percentage = $slide_meta['overlay_percentage'];
		}else{
			$overlay_percentage = .7;
		}
		if(array_key_exists('overlay_color', $slide_meta)){
			$overlay_color = $slide_meta['overlay_color'];
		}else{
			$overlay_color ='#181a1f';
		}
		$post_content = get_the_content();
		$list .='
			<div style="background-image:url('.get_the_post_thumbnail_url($idd,'large').');height:'.$height.'px"
			class="stock-slide-item">';
			if($enable_overlay == true){
				$list .='<div style="opacity:'.$overlay_percentage.'  ;background-color:'.$overlay_color.'" class="slide-overlay"></div>';
			}
			
			$list .='
				<div class="d-table slide-table">
					<div class="d-table-cell slide-table-cell">
						<div class="container">
							<div class="row">
								<div class="col-lg-6">
									<h2>'.get_the_title($idd).'</h2>
									'.wpautop($post_content).'';
				if(!empty($slide_meta['buttons'])){
					$list .='<div class="stock-slide-buttons">';
					foreach ($slide_meta['buttons'] as $button) {
						if($button['link_type'] == 1){
							$btn_link = get_page_link($button['link_to_page']);
						}else{
							$btn_link = $button['link_to_External'];
						}
						$list .='<a href="'.$btn_link.'" class="'.$button['type'].'-btn stock-slide-btn">'.$button['text'].'</a>';
					}
					$list .='</div>';
				}

				$list .='
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		';

	endwhile;
	$list .='</div></div>';
	wp_reset_query();
	return $list;

}add_shortcode('stock_slides','stock_slide_shortcode');