<?php

function stock_btn_shortcode($atts, $content = null){
	extract(shortcode_atts(array(
		'type'	=>'1',
		'link_to_page'	=>'',
		'external_link'	=>'',
		'link_text'	=>'Read More about us',
	),$atts));
		if($type == 1){
			$link_sourc = get_page_link($link_to_page);
		}else{
			$link_sourc =$external_link;
		}
		$stock_btn_markup ='
		<a href="'.$link_sourc.'" class="borderd-btn">'.$link_text.'</a>
		';
		return $stock_btn_markup;
}
add_shortcode('stock_btn','stock_btn_shortcode');