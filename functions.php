<?php
	add_action('wp_enqueue_scripts', 'cheese_scripts');


	function cheese_scripts() {
		wp_enqueue_style('cheese-style', get_stylesheet_uri());
		wp_enqueue_style( 'cheese-main-style', get_template_directory_uri() . '/assets/css/style.css' );

		wp_enqueue_script('cheese-scripts', get_template_directory_uri() . '/assets/js/app.min.js', array(), null, true);
	}	

	add_theme_support( 'menus' );


/* таксономия */

add_action( 'init', 'register_post_types' );
function register_post_types(){
    $args = [
        'labels' => [
            'name'               => 'Товар', // основное название для типа записи
            'singular_name'      => 'Товар', // название для одной записи этого типа
            'add_new'            => 'Добавить товар', // для добавления новой записи
            'add_new_item'       => 'Добавление товара', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование товара', // для редактирования типа записи
            'new_item'           => 'Новый товар', // текст новой записи
            'view_item'          => 'Смотреть товар', // для просмотра записи этого типа.
            'search_items'       => 'Искать товар', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'menu_name'          => 'Товары', // название меню
        ],
        'public'             => false,
		  "delete_with_user" => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
		  'show_in_nav_menus' => true,
        'show_in_rest'       => true,
		  'rest_base' => '',
		  'rest_controller_class' => 'WP_REST_Posts_Controller',
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
		  'description' => '',
		  'exclude_from_search' => true,
		  'map_meta_cap' => true,
		  'taxonomies'          => array('post_tag'),
        'supports' => [ 'title', 'editor']
    ];
    register_post_type( 'blog', $args );
}