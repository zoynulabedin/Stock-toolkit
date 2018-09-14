<?php
    

  vc_map(array(
        "name"  => __("Stock slider","tex domain"),
        "base"     =>"stock_slides",
        "category"=> __("Stock","text domain"),
        "params"   =>array(
                array(
                        "type"  =>"textfield",
                        "heading"  => __("count","text domain"),
                    "param_name"=>"count",
                    "value"         => __("3","text domain"),
                    "description"   => __("select slide count. if you want to show unlimited. type -1","text domain"),
                ),
                 array(
                        "type"  =>"dropdown",
                        "heading"  => __("Select slide","text domain"),
                    "param_name"=>"slide_id",
                    "value"     => stock_toolkit_get_slide_as_list(),
                    'dependency' => array(
                        'element'  =>'count',
                        'value'     => array('1'),
                    )
                   
                ),
                  array(
                        "type"  =>"textfield",
                        "heading"  => __("Slider height","text domain"),
                    "param_name"=>"height",
                    "std"         => __("730","text domain"),
                    "description"  => __("type slider height in pixle.numbers only","text domain"),
                   
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
                    'dependency' => array(
                        'element'  =>'count',
                        'value'     => array("2","3","4","5","6","7","8","9","10","11","12","13","14","15"),
                    )
                   
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
                     'dependency' => array(
                        'element'  =>'count',
                        'value'     => array("2","3","4","5","6","7","8","9","10","11","12","13","14","15"),
                    )
                ),
            array(
                        "type"  =>"dropdown",
                        "heading"  => __("Slide Time","text domain"),
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
                        'element'  =>'count',
                        'value'     => array("2","3","4","5","6","7","8","9","10","11","12","13","14","15"),
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
                     'dependency' => array(
                        'element'  =>'count',
                        'value'     => array("2","3","4","5","6","7","8","9","10","11","12","13","14","15"),
                    )
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
                     'dependency' => array(
                        'element'  =>'count',
                        'value'     => array("2","3","4","5","6","7","8","9","10","11","12","13","14","15"),
                    )
                   
                ),
        )
    ));