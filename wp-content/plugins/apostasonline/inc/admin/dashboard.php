<?php 

// dashboard admin 
add_action('wp_dashboard_setup', 'manager_dashboard');

function manager_dashboard() {
	global $wp_meta_boxes;

    wp_register_style('admin_head_css', plugins_url('../../assets/css/admin_dashboard.css',__FILE__ ));
    wp_enqueue_style('admin_head_css');

    wp_add_dashboard_widget('dashboard_widget', 'dashboard', 'welcome_admin_widget');
}

function welcome_admin_widget() {

}
// end dashboard admin

?>