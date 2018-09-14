<?php
vc_map(array(
        "name"  => __("Custom post","tex domain"),
        "base"     =>"client_post",
        "category"=> __("Trustcoder","text domain"),
        "params"   =>array(
               
                  
            array(
                        "type"  =>"dropdown",
                        "heading"  => __("Featured Image","text domain"),
                    "param_name"=>"featred_image",
                    "std"         => __("1","text domain"),
                    "value"     =>array(
                        "Show Featured image"       =>1,
                        "Remove Featured Image"        =>2,
                    ),
                    "description"   => __("","text domain"),
                    
                ),
            	 array(
                        "type"  =>"dropdown",
                        "heading"  => __("Image Alignment","text domain"),
                    "param_name"=>"image_alignment",
                    "description"   => __("","text domain"),
                     "std"         => __("1","text domain"),
                    "value"     =>array(
                        "Left"       =>1,
                        "Center"        =>2,
                        "Right"        =>3,
                    ),
                     'dependency' => array(
                        'element'  =>'featred_image',
                        'value'     => array("1"),
                    )
                ),
                 array(
                        "type"  =>"dropdown",
                        "heading"  => __("Post Title","text domain"),
                    "param_name"=>"post_title",
                    "value"     =>array(
                        "Post title"       =>1,
                        "External Title"        =>2,
                    ),
                    "description"   => __("","text domain"),
                    
                ),
                 array(
                        "type"  =>"dropdown",
                        "heading"  => __("Title Alignment","text domain"),
                    "param_name"=>"title_alignment",
                    "description"   => __("","text domain"),
                    "value"     =>array(
                        "Left"       =>1,
                        "Center"        =>2,
                        "Right"        =>3,
                    ),
                     
                ),
                 array(
                        "type"  =>"dropdown",
                        "heading"  => __("Title size","text domain"),
                    "param_name"=>"title_size",
                     "std"         => __("3","text domain"),
                    "description"   => __("","text domain"),
                    "value"     =>array(
                        "H1"       =>1,
                        "H2"       =>2,
                        "H3"       =>3,
                        "H4"       =>4,
                        "H5"       =>5,
                        "H6"       =>6,
                       
                    ),
                     
                ),
                  array(
                        "type"  =>"dropdown",
                        "heading"  => __("Title underline","text domain"),
                    "param_name"=>"title_underline",
                    "description"   => __("","text domain"),
                    "value"     =>array(
                        "Enable underline"       =>1,
                        "Disable underline"        =>2,
                                           ),
                     
                ),
                  array(
                        "type"  =>"dropdown",
                        "heading"  => __("Description","text domain"),
                    "param_name"=>"description_content",
                    "description"   => __("","text domain"),
                    "value"     =>array(
                        "Enable Description"       =>1,
                        "Disable Description"        =>2,
                                           ),
                     
                ),
                  array(
                        "type"  =>"dropdown",
                        "heading"  => __("Author","text domain"),
                    "param_name"=>"description_content",
                    "description"   => __("","text domain"),
                    "value"     =>array(
                        "show author"       =>1,
                        "Remove author"        =>2,
                                           ),
                     
                ),
                  array(
                        "type"  =>"dropdown",
                        "heading"  => __("Pagination","text domain"),
                    "param_name"=>"description_content",
                    "description"   => __("","text domain"),
                    "value"     =>array(
                        "Enable pagination"       =>1,
                        "Disable pagination"        =>2,
                                           ),
                     
                ),
                  
        )		
    ));