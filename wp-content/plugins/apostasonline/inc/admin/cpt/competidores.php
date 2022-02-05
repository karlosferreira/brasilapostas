<?php 
// Registrando Delegações
add_action( 'init', 'register_competidores' );
function register_competidores() {
	$labels = array(
		'name'               => _x( 'Competidores', 'post type general name' ),
		'singular_name'      => _x( 'Competidor', 'post type singular name' ),
		'menu_name'          => _x( 'Competidores', 'admin menu' ),
		// 'name_admin_bar'     => _x( 'Project', 'add new on admin bar' ),
		'add_new'            => _x( 'Novo competidor', 'Estoque' ),
		'add_new_item'       => __( 'Adicionar competidor' ),
		'new_item'           => __( 'Novo competidor' ),
		'edit_item'          => __( 'Editar competidor' ),
		'view_item'          => __( 'Mais informações' ),
		'all_items'          => __( 'Todas os competidores' ),
		'search_items'       => __( 'Procurar competidor' ),
		// 'parent_item_colon'  => __( 'Parent Estoque:' ),
		'not_found'          => __( 'Nada encontrado' ),
		'not_found_in_trash' => __( 'Nada encontrado aqui também' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Registra novos competidores na plataforma.' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'competidor' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 11,
		'menu_icon'          => 'dashicons-groups',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
	);

	register_post_type( 'competidores', $args );

}
?>