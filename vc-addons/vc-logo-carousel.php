<?php
//carousel
vc_map(array(
        "name"  => __("Stock logo carousel","tex domain"),
        "base"     =>"stock_logo_carousel",
        "category"=> __("Stock","text domain"),
        "params"   =>array(
                array(
                        "type"  =>"attach_images",
                        "heading"  => __("Upload logos","text domain"),
                    "param_name"=>"logos",
                    "value"         => __("3","text domain"),
                    "description"   => __("","text domain"),
                ),
                 
                array(
                        "type"  =>"dropdown",
                        "heading"  => __("Enable loop?","text domain"),
                    "param_name"=>"loop",
                    "std"         => __("true","text domain"),
                    "value"     =>array(
                        "yes"       =>"true",
                        "no"        =>"false"
                    ),
                   
                ),
                  array(
                        "type"  =>"textfield",
                        "heading"  => __("Desktop count","text domain"),
                    "param_name"=>"desktop_count",
                    "std"         => __("5","text domain"),
                     "description"   => __("","text domain"),
                ),
                  array(
                        "type"  =>"textfield",
                        "heading"  => __("Tablet count","text domain"),
                    "param_name"=>"tablet_count",
                    "std"         => __("3","text domain"),
                     "description"   => __("","text domain"),
                ),
                  array(
                        "type"  =>"textfield",
                        "heading"  => __("Mobile count","text domain"),
                    "param_name"=>"Mobile_count",
                    "std"         => __("2","text domain"),
                     "description"   => __("","text domain"),
                ),
            array(
                        "type"  =>"dropdown",
                        "heading"  => __("Enable autoplay?","text domain"),
                    "param_name"=>"autoplay",
                    "std"         => __("true","text domain"),
                    "value"     =>array(
                        "yes"       =>"true",
                        "no"        =>"false"
                    ),
                    "description"   => __("","text domain"),
                ),
            array(
                        "type"  =>"dropdown",
                        "heading"  => __("Logo carousel Time","text domain"),
                    "param_name"=>"autoplaytimeout",
                    "std"         => __("5000","text domain"),
                    "value"     =>array(
                        "1 second"       =>"1000",
                        "2 seconds"       =>"2000",
                        "3 seconds"       =>"3000",
                        "4 seconds"       =>"4000",
                        "5 seconds"       =>"5000",
                        "6 seconds"       =>"6000",
                        "7 seconds"       =>"7000",
                        "8 seconds"       =>"8000",
                        "9 seconds"       =>"9000",
                        "10 seconds"       =>"10000",
                        "11 seconds"       =>"11000",
                        "12 seconds"       =>"12000",
                        "13 seconds"       =>"13000",
                        "14 seconds"       =>"14000",
                        "15 seconds"       =>"15000",
                    ),
                    "description"   => __("","text domain"),
                     'dependency' => array(
                        'element'  =>'autoplay',
                        'value'     => array("true"),
                    )
                ),
            array(
                        "type"  =>"dropdown",
                        "heading"  => __("Enable Navigation icon","text domain"),
                    "param_name"=>"nav",
                    "std"         => __("true","text domain"),
                    "value"     =>array(
                        "yes"       =>"true",
                        "no"        =>"false"
                    ),
                ),
            array(
                        "type"  =>"dropdown",
                        "heading"  => __("Enable Dots","text domain"),
                    "param_name"=>"dots",
                    "std"         => __("true","text domain"),
                    "value"     =>array(
                        "yes"       =>"true",
                        "no"        =>"false"
                    ),
                   
                ),
        )
    ));
 