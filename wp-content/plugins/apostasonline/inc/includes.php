<?php 

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

function custom_admin_footer() {
?>

    <div class="remodal" data-remodal-id="modal">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h1>Remodal</h1>
    <p>
        Responsive, lightweight, fast, synchronized with CSS animations, fully customizable modal window plugin with declarative configuration and hash tracking.
    </p>
    <br>
    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
    <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
    </div>

</div>

<script src="<?php echo plugins_url('../assets/js/remodal.js',__FILE__ ); ?>"></script>

<?php

}
add_filter('admin_footer', 'custom_admin_footer');


?>