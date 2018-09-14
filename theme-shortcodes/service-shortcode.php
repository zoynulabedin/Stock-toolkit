<?php

function stock_service_shortcode_shortcode($atts, $content = null){
	extract(shortcode_atts(array(
		'title'	=>'',
		'desc'	=>'',
		'type'	=>'1',
		'link_to_page'	=>'',
		'external_link'	=>'',
		'link_text'	=>'See More',
		'icon_type'	=>'1',
		'upload_icon'	=>'',
		'choose_icon'	=>'',
		'box_background'	=>'',
	),$atts));
		if($type == 1){
			$link_sourc = get_page_link($link_to_page);
		}else{
			$link_sourc =$external_link;
		}
		$box_bg_array = wp_get_attachment_image_src($box_background,'medium');
		$stock_servic_box_markup ='
			<div class="stock-service-box">
				<div style="background-image:url('.$box_bg_array[0].')"class="stock-service-icon">
					<div class="d-table stock-service-table">
						<div class="d-table-cell stock-service-tablecell">';

						if($icon_type == 1){
							$service_icon_array = wp_get_attachment_image_src($upload_icon,'thumbnail');
							$stock_servic_box_markup .='<img src="'.$service_icon_array[0].'" alt=""/>';
						}else{
							$stock_servic_box_markup .='<i class="'.$choose_icon.'"></i>';
						}
						$stock_servic_box_markup .='
						</div>
					</div>
				</div>
				<div class="stock-service-content">
					<h3>'.$title.'</h3>
					'.wpautop($desc).'
					<a href="'.$link_sourc.'" class="stock-service-btn">'.$link_text.'</a>
				</div>
			</div>
		';
		return $stock_servic_box_markup;
}
add_shortcode('stock_service_box','stock_service_shortcode_shortcode');