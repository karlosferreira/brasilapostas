<?php 

add_action('init', 'redirect_to_backend');

function redirect_to_backend() {
    if(
        !is_admin() &&
        !is_wplogin() &&
        !is_rest()
    ) {
    wp_redirect(site_url('wp-admin'));
    exit();
  }
}

if (!function_exists('is_rest')) {
    /**
     * Checks if the current request is a WP REST API request.
     * 
     * Case #1: After WP_REST_Request initialisation
     * Case #2: Support "plain" permalink settings
     * Case #3: URL Path begins with wp-json/ (your REST prefix)
     *          Also supports WP installations in subfolders
     * 
     * @returns boolean
     * @author matzeeable
     */
    function is_rest() {
        $prefix = rest_get_url_prefix( );
        if (defined('REST_REQUEST') && REST_REQUEST // (#1)
            || isset($_GET['rest_route']) // (#2)
                && strpos( trim( $_GET['rest_route'], '\\/' ), $prefix , 0 ) === 0)
            return true;

        // (#3)
        $rest_url = wp_parse_url( site_url( $prefix ) );
        $current_url = wp_parse_url( add_query_arg( array( ) ) );
        return strpos( $current_url['path'], $rest_url['path'], 0 ) === 0;
    }
}

function is_wplogin(){
    $ABSPATH_MY = str_replace(array('\\','/'), DIRECTORY_SEPARATOR, ABSPATH);
    return ((in_array($ABSPATH_MY.'wp-login.php', get_included_files()) || in_array($ABSPATH_MY.'wp-register.php', get_included_files()) ) || (isset($_GLOBALS['pagenow']) && $GLOBALS['pagenow'] === 'wp-login.php') || $_SERVER['PHP_SELF']== '/wp-login.php');
}

function remove_default_menu(){
    remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=category' );
    remove_menu_page('index.php'); // Dashboard
    remove_menu_page('edit.php'); // Posts
    remove_menu_page('upload.php'); // Media
    remove_menu_page('link-manager.php'); // Links
    remove_menu_page('edit.php?post_type=page'); // Pages
    remove_menu_page('edit-comments.php'); // Comments
    remove_menu_page('themes.php'); // Appearance
    remove_menu_page('plugins.php'); // Plugins
    // remove_menu_page('users.php'); // Users
    remove_menu_page('tools.php'); // Tools
    remove_menu_page('options-general.php'); // Settings
    // remove_menu_page( 'edit.php?post_type=acf-field-group' ); // ACF
    // remove_menu_page( 'admin.php?page=wc-admin' ); // Woocommerce
    remove_menu_page('admin.php?page=wc-admin&path=%2Fanalytics%2Foverview'); // Analytics
    remove_menu_page('woocommerce-marketing'); // Marketing;
    remove_menu_page( 'edit.php?post_type=product' ); // Produtos
    // remove_menu_page( 'woocommerce' ); // WOOCOMMERCE
}
add_action( 'admin_menu', 'remove_default_menu' );

add_filter( 'woocommerce_admin_disabled', '__return_true' );

function plt_hide_woocommerce_dashboard_widgets() {
	$screen = get_current_screen();
	if ( !$screen ) {
		return;
	}

	//Remove the "WooCommerce Recent Reviews" widget.
	remove_meta_box('woocommerce_dashboard_recent_reviews', 'dashboard', 'normal');
	//Remove the "WooCommerce Status" widget.
	remove_meta_box('woocommerce_dashboard_status', 'dashboard', 'normal');
}

add_action('wp_dashboard_setup', 'plt_hide_woocommerce_dashboard_widgets', 20);

add_theme_support( 'post-thumbnails' );

function wporg_remove_all_dashboard_metaboxes() {
    // Remove Welcome panel
    remove_action( 'welcome_panel', 'wp_welcome_panel' );
    // Remove the rest of the dashboard widgets
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'health_check_status', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
    remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal');
}
add_action( 'wp_dashboard_setup', 'wporg_remove_all_dashboard_metaboxes' );


remove_action( 'in_admin_header', 'wp_admin_bar_render', 0 );
//disables top margin
add_filter( 'admin_title', function(){ $GLOBALS['wp_query']->is_embed=true;  add_action('admin_xml_ns', function(){ $GLOBALS['wp_query']->is_embed=false; } ); } );

// Custom Exit Url
add_action( 'admin_menu', 'exit_menu_url' );

function exit_menu_url() {
	add_menu_page( 
        'home_url', 
        'Sair', 
        'read', 
        wp_logout_url( site_url() ), 
        '', 
        'dashicons-share-alt2', 
        99 
    );
}

// End Custom Exit Url

add_action( 'login_enqueue_scripts', 'login_css' );

function login_css() {
    wp_register_style('login_css', plugins_url('../assets/css/login.css',__FILE__ ));
    wp_enqueue_style('login_css');
}

add_action('admin_menu', 'admin_menu_css');

function admin_menu_css() {
    wp_register_style('admin_menu_css', plugins_url('../assets/css/admin_menu2.css',__FILE__ ));
    wp_enqueue_style('admin_menu_css');
}

add_action('admin_menu', 'init_remodal');

function init_remodal() {
    wp_register_style('default_remodal_css', plugins_url('../assets/css/remodal.css',__FILE__ ));
    wp_enqueue_style('default_remodal_css');
    wp_register_style('remodal_css', plugins_url('../assets/css/remodal-default-theme.css',__FILE__ ));
    wp_enqueue_style('remodal_css'); 
}

function remove_core_updates(){
    global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');

// Montagem do Admin

?>