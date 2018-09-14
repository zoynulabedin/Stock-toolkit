<?php
vc_map(array(
        "name"  => __("Stock Testmonial box","tex domain"),
        "base"     =>"stock_testmonial_box",
        "category"=> __("Stock","text domain"),
        "params"   =>array(
        		array(
                        "type"  =>"attach_image",
                        "heading"  => __("Photo","text domain"),
                    "param_name"=>"photo",
                    "description"   => __("","text domain"),
                ),
                array(
                        "type"  =>"textfield",
                        "heading"  => __("Title","text domain"),
                    "param_name"=>"title",
                    "description"   => __("","text domain"),
                ),
                 
                array(
                        "type"  =>"textfield",
                        "heading"  => __("Position/Location","text domain"),
                    "param_name"=>"position",
                     "description"   => __("","text domain"),
                ),
                array(
                        "type"  =>"textarea",
                        "heading"  => __("Testmonial","text domain"),
                    "param_name"=>"testmonial",
                     "description"   => __("","text domain"),
                ),
                  
           
        )		
    ));