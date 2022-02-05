<?php 

$current_user = wp_get_current_user();

// var_dump($current_user); die();

if ( $current_user->roles[0] == 'administrator' ) { 

    add_action('admin_menu', 'init_admin');
    
    function init_admin() {
        include_once( plugin_dir_path( __FILE__ ) . 'admin/dashboard.php');    
    }

    include_once( plugin_dir_path( __FILE__ ) . 'admin/cpt/competicoes.php');
    include_once( plugin_dir_path( __FILE__ ) . 'admin/cpt/competidores.php');
    include_once( plugin_dir_path( __FILE__ ) . 'admin/cpt/jogos.php');
    include_once( plugin_dir_path( __FILE__ ) . 'admin/cpt/weeks.php');
    include_once( plugin_dir_path( __FILE__ ) . 'admin/cpt/apostas.php');

}

if ( $current_user->roles[0] == 'editor' ) { 
    
    add_action('admin_menu', 'init_client');

    function init_client() {
        remove_menu_page('profile.php'); // Plugins
        add_menu_page( 'campeonato_carioca', 'Campeonato Carioca', 'editor', 'campeonato-carioca', 'campeonato_carioca_cb', plugin_dir_url( __DIR__ ).'assets/img/fut-icon.png', 13 );
    }

    function campeonato_carioca_cb() {
        include_once( plugin_dir_path( __FILE__ ) . 'client/page/campeonato_carioca.php');
    }
}

?>