<?php 
// Registrando Jogos
add_action( 'init', 'register_games' );
function register_games() {
	$labels = array(
		'name'               => _x( 'Jogos', 'post type general name' ),
		'singular_name'      => _x( 'Jogo', 'post type singular name' ),
		'menu_name'          => _x( 'Jogos', 'admin menu' ),
		// 'name_admin_bar'     => _x( 'Project', 'add new on admin bar' ),
		'add_new'            => _x( 'Novo jogo', 'Estoque' ),
		'add_new_item'       => __( 'Adicionar jogo' ),
		'new_item'           => __( 'Novo jogo' ),
		'edit_item'          => __( 'Editar jogo' ),
		'view_item'          => __( 'Mais informações' ),
		'all_items'          => __( 'Todas os jogos' ),
		'search_items'       => __( 'Procurar jogo' ),
		// 'parent_item_colon'  => __( 'Parent Estoque:' ),
		'not_found'          => __( 'Nada encontrado' ),
		'not_found_in_trash' => __( 'Nada encontrado aqui também' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Registra novos jogos na plataforma.' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'game' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 11,
		'menu_icon'          => 'dashicons-games',
        'supports'           => array( 'title', 'thumbnail' ),
	);

	register_post_type( 'jogos', $args );

}
?>