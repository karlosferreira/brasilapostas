<?php 
// Registrando Apostas
add_action( 'init', 'register_bets' );
function register_bets() {
	$labels = array(
		'name'               => _x( 'Apostas', 'post type general name' ),
		'singular_name'      => _x( 'Aposta', 'post type singular name' ),
		'menu_name'          => _x( 'Apostas', 'admin menu' ),
		// 'name_admin_bar'     => _x( 'Project', 'add new on admin bar' ),
		'add_new'            => _x( 'Nova aposta', 'Estoque' ),
		'add_new_item'       => __( 'Adicionar aposta' ),
		'new_item'           => __( 'Nova aposta' ),
		'edit_item'          => __( 'Editar aposta' ),
		'view_item'          => __( 'Mais informações' ),
		'all_items'          => __( 'Todas as apostas' ),
		'search_items'       => __( 'Procurar aposta' ),
		// 'parent_item_colon'  => __( 'Parent Estoque:' ),
		'not_found'          => __( 'Nada encontrado' ),
		'not_found_in_trash' => __( 'Nada encontrado aqui também' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Registra novas apostas na plataforma.' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'bet' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 11,
		'menu_icon'          => 'dashicons-tickets-alt',
        'supports'           => array( 'title', 'thumbnail' ),
	);

	register_post_type( 'apostas', $args );

    register_taxonomy(
        'aposta_type',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'apostas',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'Tipos de Aposta', // display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'aposta_type',    // This controls the base slug that will display before each term
                'with_front' => false  // Don't display the category base before
            )
        )
    );

}
?>