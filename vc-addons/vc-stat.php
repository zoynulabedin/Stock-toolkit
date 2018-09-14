<?php
vc_map(array(
        "name"  => __("Stock static box","tex domain"),
        "base"     =>"stock_stat",
        "category"=> __("Stock","text domain"),
        "params"   =>array(
            	  array(
                        "type"  =>"textfield",
                        "heading"  => __("statics number","text domain"),
                    "param_name"=>"number",
                    "description"   => __("","text domain"),
                ),
            	   array(
                        "type"  =>"textfield",
                        "heading"  => __("statics number after text","text domain"),
                    "param_name"=>"after_text",
                    "description"   => __("","text domain"),
                ),
            	    array(
                        "type"  =>"textfield",
                        "heading"  => __("statics description","text domain"),
                    "param_name"=>"description",
                    "description"   => __("","text domain"),
                ),

          )		
    ));