<?php
vc_map(array(
        "name"  => __("Stock service box","tex domain"),
        "base"     =>"stock_service_box",
        "category"=> __("Stock","text domain"),
        "params"   =>array(
                array(
                        "type"  =>"textfield",
                        "heading"  => __("Title","text domain"),
                    "param_name"=>"title",
                    "description"   => __("","text domain"),
                ),
                 
                array(
                        "type"  =>"textarea",
                        "heading"  => __("content","text domain"),
                    "param_name"=>"desc",
                     "description"   => __("","text domain"),
                ),
                  
            array(
                        "type"  =>"dropdown",
                        "heading"  => __("Link type","text domain"),
                    "param_name"=>"type",
                    "std"         => __("1","text domain"),
                    "value"     =>array(
                        "Link to page"       =>1,
                        "External Link"        =>2,
                    ),
                    "description"   => __("","text domain"),
                ),
            	 array(
                        "type"  =>"dropdown",
                        "heading"  => __("Link to page","text domain"),
                    "param_name"=>"link_to_page",
                    "value"     =>stock_toolkit_get_page_as_list(),
                    "description"   => __("","text domain"),
                     'dependency' => array(
                        'element'  =>'type',
                        'value'     => array("1"),
                    )
                ),
            	  array(
                        "type"  =>"textfield",
                        "heading"  => __("External Link","text domain"),
                    "param_name"=>"external_link",
                    "description"   => __("","text domain"),
                     'dependency' => array(
                        'element'  =>'type',
                        'value'     => array("2"),
                    )
                ),
            	  array(
                        "type"  =>"textfield",
                        "heading"  => __("Link text","text domain"),
                    "param_name"=>"link_text",
                     "std"         => __("See More","text domain"),
                    "description"   => __("","text domain"),
                     'dependency' => array(
                        'element'  =>'type',
                        'value'     => array("2"),
                    )
                ),
               array(
                        "type"  =>"dropdown",
                        "heading"  => __("Icon type","text domain"),
                    "param_name"=>"icon_type",
                    "std"         => __("1","text domain"),
                    "value"     =>array(
                        "Upload Icon"       =>1,
                        "Fontawesome icon"        =>2,
                    ),
                    "description"   => __("","text domain"),
                ),
                array(
                        "type"  =>"attach_image",
                        "heading"  => __("Upload Icon","text domain"),
                    "param_name"=>"upload_icon",
                    "description"   => __("","text domain"),
                     'dependency' => array(
                        'element'  =>'icon_type',
                        'value'     => array("1"),
                    )
                ),
                 array(
                        "type"  =>"iconpicker",
                        "heading"  => __("choose Icon","text domain"),
                    "param_name"=>"choose_icon",
                    "description"   => __("","text domain"),
                     'dependency' => array(
                        'element'  =>'icon_type',
                        'value'     => array("2"),
                    )
                ),
                  array(
                        "type"  =>"attach_image",
                        "heading"  => __("Box background","text domain"),
                    "param_name"=>"box_background",
                    "description"   => __("","text domain"),
                ),
        )		
    ));