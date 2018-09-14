<?php
vc_map(array(
        "name"  => __("Stock Project","tex domain"),
        "base"     =>"stock_project",
        "category"=> __("Stock","text domain"),
        "params"   =>array(
               
            array(
                        "type"  =>"dropdown",
                        "heading"  => __("Link type","text domain"),
                    "param_name"=>"theme",
                    "std"         => __("1","text domain"),
                    "value"     =>array(
                        "Theme-1"       =>1,
                        "Theme-2"        =>2,
                    ),
                    "description"   => __("","text domain"),
                ),
                
             
        )		
    ));
