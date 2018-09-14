<?php

function stock_promo_box_shortcode($atts, $content = null){
	extract(shortcode_atts(array(
		'title'	=>'',
		'desc'	=>'',
		'type'	=>'1',
		'link_to_page'	=>'',
		'external_link'	=>'',
		'link_text'	=>'see more',
	),$atts));
		if($type == 1){
			$link_sourc = get_page_link($link_to_page);
		}else{
			$link_sourc =$external_link;
		}
		$stock_promo_box_markup ='
			<div class="stock-promo_box-box">
				<h2>'.$title.'</h2>
				'.wpautop($desc).'
				<a href="'.$link_sourc.'" class="borderd-btn">'.$link_text.'</a>
			</div>
		';
		return $stock_promo_box_markup;
}
add_shortcode('stock_promo_box','stock_promo_box_shortcode');

