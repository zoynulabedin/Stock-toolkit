<?php

function stock_cta_shortcode($atts, $content = null){
	extract(shortcode_atts(array(
		'title'	=>'',
		'desc'	=>'',
		'type'	=>'1',
		'link_to_page'	=>'',
		'theme'	=>1,
		'external_link'	=>'',
		'link_text'	=>'see more',
	),$atts));
		if($type == 1){
			$link_sourc = get_page_link($link_to_page);
		}else{
			$link_sourc =$external_link;
		}
		$stock_cta_markup ='
			<div class="stock-cta-box stock-cta-theme-'.$theme.'">
				<h2>'.$title.'</h2>
				'.wpautop($desc).'
				<a href="'.$link_sourc.'" class="borderd-btn">'.$link_text.'</a>
			</div>
		';
		return $stock_cta_markup;
}
add_shortcode('stock_cta','stock_cta_shortcode');

