<?php

function stock_styled_map_shortcode($atts, $content = null){
	extract(shortcode_atts(array(
		'title'	=>'',
	),$atts));
		$stock_styled_map_markup ='
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX3IXH5a8WpXFbOcwCu4QJ3AUOCzRzG0E&region=GB"></script>
		   <div style="width:100%;height:500px" class="map"></div>
  <script>
  jQuery(document).ready(function($){
		$(".map")
      .gmap3({
        center:[41.850033, -87.650052],
        zoom:12,
        mapTypeId: "shadeOfGrey", // to select it directly
        mapTypeControlOptions: {
          mapTypeIds: [google.maps.MapTypeId.ROADMAP, "shadeOfGrey"]
        }
      })
      .styledmaptype(
        "shadeOfGrey",
        [
          {"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#aaaaaa"},{"lightness":70}]},
         
          {"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"on"}]},
          {"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},
          {"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},
          {"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":20}]},
          {"featureType":"poi","elementType":"geometry","stylers":[{"color":"#e5e5e5"},{"lightness":21}]},
          {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},
          {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},
          {"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},
          {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},
          {"featureType":"transit","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":19}]},
          {"featureType":"water","elementType":"geometry","stylers":[{"color":"#ededed"},{"lightness":17}]}
        ],
        {name: "Shades of Grey"}
      );

  });
    
  </script>

		';
		return $stock_styled_map_markup;
}
add_shortcode('stock_styled_map','stock_styled_map_shortcode');

