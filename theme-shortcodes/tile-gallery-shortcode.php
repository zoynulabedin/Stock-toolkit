<?php

function stock_tile_gallery_shortcode($atts, $content = null){
	extract(shortcode_atts(array(
		'image'	=> '',
		'hight'	=>'310',
		'size'	=>'large',
	),$atts));
		$image_ids = explode(',',$image);
		$image_count = count($image_ids);
		$image_no = 0;

		if(!empty($image)){
			$stock_tile_gallery_murkup ='
				<div class="stock-tile-gallery stock-tile-gallery-count-'.$image_count.'">';
					foreach ($image_ids as $img) {
						$image_array = wp_get_attachment_image_src($image,$size);
						$image_no++;
						$stock_tile_gallery_murkup .='<div style="background-image:url('.$image_array[0].');height:'.$hight.'px" class="tile-gallery-block tile-gallery-block-'.$image_no.'"></div>';
					}
					
					$stock_tile_gallery_murkup .='
				</div>
			';
		}else{
			$stock_tile_gallery_murkup ='';
		}
	

	return $stock_tile_gallery_murkup;
}
add_shortcode('stock_tile_gallery','stock_tile_gallery_shortcode');