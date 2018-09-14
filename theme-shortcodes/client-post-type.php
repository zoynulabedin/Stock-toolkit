<?php

function client_post_type($atts, $content = null){
	extract(shortcode_atts(array(
		'featred_image'	=>'1',
		'image_alignment'	=>'',
		'post_title'	=>'',
		'title_alignment'	=>'',
		'title_size'	=>'',
		'title_underline'	=>'',
		'description_content'	=>'',
		'author_text'	=>'',
		'pagination_options'	=>'',
	),$atts));
		$photo_array = wp_get_attachment_image_src($photo,'large');
		
			$custom = new WP_Query(array(
					'post_type' =>'Custom_post',
					'post_per_page' =>-1,
			));
			while($custom->have_posts()):$custom->the_post();
		$cleint_custom_post ='

			<div class="block-blog p-t-60 p-b-60">
	        <div class="container">
	            <div class="blog-item">
		            <div class="row">';
		            $cleint_custom_post ='

		                <div class="col-sm-6 col-md-6 col-lg-6 p-l-0 pull-right wow animated fadeInRight">
			                <div class="blog-img hover-img">
		                    	<img src="'.the_post_thumbnail().'" alt="image">
		                  	</div>
		                </div>';

		                $cleint_custom_post .='
			            <div class="col-sm-6 col-md-6 col-lg-6">
			            	<div class="post-title">
			                    <h2>'.the_title().'</h2>
			                </div>
			                <div class="bp-content">
			                    <div class="span" style="text-align: justify;">
									<p>
									'.the_content().'
									</p>
									<a href="'.the_permalink().'" class="link" style="color: red;">Read more</a>
			                    </div>

			                    <div class="row">
			                    	<button class="btn-blog">
			                    		<i class="fa fa-calendar" aria-hidden="true"></i>
			                          	<span>Date : </span>5 Jan
			                      	</button>
			                    	<button class="btn-blog">
			                    		<i class="fa fa-user" aria-hidden="true"></i>
			                          	<span>Author :</span>Ashiful
			                    	</button>
			                    	<button class="btn-blog">
			                    		<i class="fa fa-comment-o" aria-hidden="true"></i>
			                          <span>Comments :</span> 15 Comments
			                    	</button>
			                    </div>
			                </div>
			            </div>
		            </div>
	            </div>
		';
	endwhile;
		return $cleint_custom_post;
}
add_shortcode('client_post','client_post_type');