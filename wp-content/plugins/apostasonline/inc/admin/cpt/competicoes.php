<?php 
// Registrando Competições
add_action( 'init', 'register_competicoes' );
function register_competicoes() {
	$labels = array(
		'name'               => _x( 'Competições', 'post type general name' ),
		'singular_name'      => _x( 'Competição', 'post type singular name' ),
		'menu_name'          => _x( 'Competições', 'admin menu' ),
		// 'name_admin_bar'     => _x( 'Project', 'add new on admin bar' ),
		'add_new'            => _x( 'Nova competição', 'Estoque' ),
		'add_new_item'       => __( 'Adicionar competição' ),
		'new_item'           => __( 'Nova competição' ),
		'edit_item'          => __( 'Editar competição' ),
		'view_item'          => __( 'Mais informações' ),
		'all_items'          => __( 'Todas as competições' ),
		'search_items'       => __( 'Procurar competição' ),
		// 'parent_item_colon'  => __( 'Parent Estoque:' ),
		'not_found'          => __( 'Nada encontrado' ),
		'not_found_in_trash' => __( 'Nada encontrado aqui também' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Registra novas competições na plataforma.' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'competicao' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 11,
		'menu_icon'          => 'dashicons-networking',
        'supports'           => array( 'title', 'thumbnail' ),
	);

	register_post_type( 'competicoes', $args );

    register_taxonomy(
        'esportes',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'competicoes',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'Esportes', // display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'sport',    // This controls the base slug that will display before each term
                'with_front' => false  // Don't display the category base before
            )
        )
    );

}
?>