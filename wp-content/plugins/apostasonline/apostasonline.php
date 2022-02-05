<?php
/*
	Plugin Name: Apostas Online Plugin
	Description:  Disable the frontend interface of the website, leave only CMS and REST API.
	Configure network and multistore woocommerce
	Author: Carlos Ferreira (kyrvim@gmail.com)
	Version: 1.0
*/

/*
	A INSTALAÇÃO WORDPRESS DEVERÁ SER MODIFICADA NO ARQUIVO /wp-admin/menu-header.php
	APÓS O BLOCO "<ul id="adminmenu">"
	******
	<style>
		.logo-box img {
			width: 135px;
    		padding-bottom: 7px;
		}
		.logo-box {
			text-align: center;
			padding: 30px;
			padding-bottom: 10px;
		}
		#adminmenuwrap h3 {
			text-align: center;
			color: #096484;
			margin: 0;
			font-size: 14px;
			transform: translateY(10px);
		}
		#adminmenu .wp-submenu-head, #adminmenu a.menu-top{
			font-size: 17px;
			font-weight: 400;
			line-height: 0.97;			
		}
	</style>
	<li style="transform: translateY(11px);" class="<?php if ($_SERVER['QUERY_STRING'] == "") {
		echo 'current';
	} ?> menu-top menu-icon-wecart-orders" id="menu-posts-wecart-orders">
		<a href="<?php echo admin_url() ?>" class="current menu-top menu-icon-wecart-orders" aria-current="page">
			<div class="wp-menu-arrow">
				<div></div>
			</div>
			<div class="wp-menu-image dashicons-before dashicons-admin-home" aria-hidden="true"><br></div>
			<div class="wp-menu-name">Início</div>
		</a>
	</li>	
	******
*/ 


include ( plugin_dir_path ( __FILE__ ) . 'inc/default.php' );

add_action( 'plugins_loaded', 'default_system' );
function default_system() {

    include( plugin_dir_path( __FILE__ ) . 'inc/includes.php');
    include( plugin_dir_path( __FILE__ ) . 'inc/sessions.php');

}

// function your_namespace() {
//     wp_register_style('your_namespace', plugins_url('style.css',__FILE__ ));
//     wp_enqueue_style('your_namespace');
//     wp_register_script( 'your_namespace', plugins_url('your_script.js',__FILE__ ));
//     wp_enqueue_script('your_namespace');
// }

// add_action( 'admin_init','your_namespace');