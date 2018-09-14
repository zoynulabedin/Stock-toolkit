<?php

function stock_logo_carousel_shortcode($atts, $content = null){
	extract(shortcode_atts(array(
		'logos'	=> '',
		'desktop_count'	=>'5',
		'tablet_count'	=>'3',
		'mobile_count'	=>'2',
		'loop'	=>'true',
		'autoplay'	=>'true',
		'autoplaytimeout'	=>'5000',
		'dots'	=>'true',
		'nav'	=>'true',
	),$atts));
		$logo_ids = explode(',',$logos);
	$stock_logo_carousel_murkup ='
		<script>
			jQuery(document).ready(function($) {
				$(".stock-logo-carousel").owlCarousel({

					margin:30,
					autoplay:'.$autoplay.',
					loop:'.$loop.',
					nav:'.$nav.',
					autoplayTimeout:'.$autoplaytimeout.',
					dots:'.$dots.',
					navText:["<i class=\'fa fa-angle-left\'></i>","<i class=\'fa fa-angle-right\'></i>"],
					responsive:{
						0:{
							items:'.$mobile_count.',
						},
						600:{
							items:'.$tablet_count.',
						},
						1000:{
							items:'.$desktop_count.'

						}
					}
				});
			});
		</script>
	';
	$stock_logo_carousel_murkup .='

		<div class="owl-carousel stock-logo-carousel">';
			foreach($logo_ids as $logo) {
				$logo_array = wp_get_attachment_image_src($logo,'large');
				$stock_logo_carousel_murkup .='
					<div class="d-table stock-logo-item-table">
						<div class="d-table-cell stock-logo-item-tablecell">
							<img src="'.$logo_array[0].'"  alt=""/>
						</div>
					</div>
				';
			}
			$stock_logo_carousel_murkup .='
		</div>
	';

	return $stock_logo_carousel_murkup;
}
add_shortcode('stock_logo_carousel','stock_logo_carousel_shortcode');