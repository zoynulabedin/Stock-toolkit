<?php

if(!defined('ABSPATH')) die('-1');

class ordomainVCExtendAddonClass{
	function __construct() {
		//we safely integrate with VC with this hook
		add_action('init',array($this,'ordomainkIntegrateWithVC'));
	}

	public function ordomainkIntegrateWithVC(){
		//checks if visual composer is not installed
		if (!defined('WPB_VC_VERSION')){
			add_action('admin_notices',array($this,'stockShowVcVersionNotice'));
			return;
		}
		//visual composer addons.
        include STOCK_ACC_PATH .'/vc-addons/vc-slides.php';
        include STOCK_ACC_PATH .'/vc-addons/vc-logo-carousel.php';
		include STOCK_ACC_PATH .'/vc-addons/vc-service.php';
		include STOCK_ACC_PATH .'/vc-addons/vc-cta.php';
		include STOCK_ACC_PATH .'/vc-addons/vc-stock-btn.php';
		include STOCK_ACC_PATH .'/vc-addons/vc-stat.php';
		include STOCK_ACC_PATH .'/vc-addons/vc-testmonial-box.php';
		include STOCK_ACC_PATH .'/vc-addons/vc-tile-gallery.php';
		include STOCK_ACC_PATH .'/vc-addons/vc-video.php';
		include STOCK_ACC_PATH .'/vc-addons/vc-promo-box.php';
		include STOCK_ACC_PATH .'/vc-addons/vc-project.php';
		// client-post
		include STOCK_ACC_PATH .'/vc-addons/vc-client-post.php';
	}
	//show viusal composer version
	 public function stockShowVcVersionNotice(){
         $theme_data = wp_get_theme();
             echo '
                <div class="notice notice-warning">
                  <p>'.sprintf(__('<strong>%s</strong> recommends <strong><a href="'.site_url().'/wp-admin/themes.php?page=tgmpa-install-plugins" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', 'seo-crazycafe'), $theme_data->get('Name')).'</p>
                </div>';
          }   
}
//finally initialize code
new ordomainVCExtendAddonClass();
