<?php

function stock_testmonial_box_shortcode($atts, $content = null){
	extract(shortcode_atts(array(
		'title'	=>'',
		'position'	=>'',
		'testmonial'	=>'1',
		'photo'	=>'',
	),$atts));
		$photo_array = wp_get_attachment_image_src($photo,'large');

		$stock_stestmonial_box_markup ='
			<div class="signle-testmonial-box">
				<img src="'.$photo_array[0].'" alt="'.$title.'">
				<h3>'.$title.'<span>'.$position.'</span></h3>
				'.wpautop($testmonial).'
			</div>
		';
		return $stock_stestmonial_box_markup;
}
add_shortcode('stock_testmonial_box','stock_testmonial_box_shortcode');