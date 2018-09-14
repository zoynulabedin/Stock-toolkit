<?php
vc_map(array(
        "name"  => __("Stock Tile Gallery","tex domain"),
        "base"     =>"stock_tile_gallery",
        "category"=> __("Stock","text domain"),
        "params"   =>array(
                array(
                        "type"  =>"attach_images",
                        "heading"  => __("Upload Gallery Images","text domain"),
                    "param_name"=>"image",
                    "description"   => __("","text domain"),
                ),
                 
                array(
                        "type"  =>"textfield",
                        "heading"  => __("Hight","text domain"),
                    "param_name"=>"hight",
                    "std"         => __("310","text domain"),
                    "description"   => __("Type image height in number","text domain"),
                )
        )
    ));
