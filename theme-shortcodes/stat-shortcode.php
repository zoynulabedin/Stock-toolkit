<?php

function stock_stat_shortcode($atts, $content = null){
	extract(shortcode_atts(array(
		'number'	=>'',
		'after_text'	=>'',
		'description'	=>'',
	),$atts));
		
		$stock_btn_markup ='
			<div class="stock-stat-box">
				<h1><span>'.$number.'</span>'.$after_text.'</h1>
				'.$description.'
			</div>
		';
		return $stock_btn_markup;
}
add_shortcode('stock_stat','stock_stat_shortcode');