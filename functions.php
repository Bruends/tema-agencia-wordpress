<?php 

// constantes
define('THEME_PATH', get_stylesheet_directory_uri());

// retorna link da página especificada
function getPageLink(String $page){
  return get_permalink( get_page_by_path( $page ) );
}

// suporte para thumbs
add_theme_support('post-thumbnails');

// custom type projetos
function custom_post_type_projetos() {
	register_post_type('projetos', array(
		'label' => 'Projetos',
		'description' => 'Projetos',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,		
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),
		'thumbnail',
		'labels' => array (
			'name' => 'Projetos',
			'singular_name' => 'Projeto',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Projeto',
			'edit' => 'Editar',
			'edit_item' => 'Editar Projeto',
			'new_item' => 'Novo Projeto',
			'view' => 'Ver Projeto',
			'view_item' => 'Ver Projetos',
			'search_items' => 'Procurar Projetos',
			'not_found' => 'Nenhum Projeto Encontrado',
			'not_found_in_trash' => 'Nenhum Projeto Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_projetos');