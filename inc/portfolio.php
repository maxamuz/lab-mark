<?php

/**
 * Portfolio Custom Post Type, Taxonomies & Meta Boxes
 *
 * @package lab-mark
 */

// Exit if accessed directly.
if (! defined('ABSPATH')) {
	exit;
}

/**
 * ============================================================
 * 1. Register Custom Post Type: project
 * ============================================================
 */
function lab_mark_register_project_cpt()
{
	$labels = array(
		'name'               => __('Проекты', 'lab-mark'),
		'singular_name'      => __('Проект', 'lab-mark'),
		'menu_name'          => __('Портфолио', 'lab-mark'),
		'add_new'            => __('Добавить проект', 'lab-mark'),
		'add_new_item'       => __('Добавить новый проект', 'lab-mark'),
		'edit_item'          => __('Редактировать проект', 'lab-mark'),
		'new_item'           => __('Новый проект', 'lab-mark'),
		'view_item'          => __('Просмотр проекта', 'lab-mark'),
		'search_items'       => __('Найти проект', 'lab-mark'),
		'not_found'          => __('Проекты не найдены', 'lab-mark'),
		'not_found_in_trash' => __('Проекты не найдены в корзине', 'lab-mark'),
		'all_items'          => __('Все проекты', 'lab-mark'),
	);

	$args = array(
		'labels'              => $labels,
		'public'              => true,
		'has_archive'         => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_rest'        => true,
		'rest_base'           => 'projects',
		'query_var'           => true,
		'rewrite'             => array('slug' => 'projects'),
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-portfolio',
		'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
	);

	register_post_type('project', $args);
}
add_action('init', 'lab_mark_register_project_cpt');

/**
 * ============================================================
 * 2. Register Taxonomy: project_category (Категории проектов)
 *    Служит для фильтрации: лендинги, корпоративные, магазины
 * ============================================================
 */
function lab_mark_register_project_category()
{
	$labels = array(
		'name'              => __('Категории проектов', 'lab-mark'),
		'singular_name'     => __('Категория проекта', 'lab-mark'),
		'search_items'      => __('Найти категорию', 'lab-mark'),
		'all_items'         => __('Все категории', 'lab-mark'),
		'edit_item'         => __('Редактировать категорию', 'lab-mark'),
		'update_item'       => __('Обновить категорию', 'lab-mark'),
		'add_new_item'      => __('Добавить категорию', 'lab-mark'),
		'new_item_name'     => __('Новое название категории', 'lab-mark'),
		'menu_name'         => __('Категории', 'lab-mark'),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'rest_base'         => 'project-categories',
		'query_var'         => true,
		'rewrite'           => array('slug' => 'project-category'),
	);

	register_taxonomy('project_category', array('project'), $args);
}
add_action('init', 'lab_mark_register_project_category');

/**
 * ============================================================
 * 3. Register Taxonomy: project_tag (Метки проектов)
 *    Метки выводятся в project-tags карточки проекта
 * ============================================================
 */
function lab_mark_register_project_tag()
{
	$labels = array(
		'name'              => __('Метки проектов', 'lab-mark'),
		'singular_name'     => __('Метка проекта', 'lab-mark'),
		'search_items'      => __('Найти метку', 'lab-mark'),
		'all_items'         => __('Все метки', 'lab-mark'),
		'edit_item'         => __('Редактировать метку', 'lab-mark'),
		'update_item'       => __('Обновить метку', 'lab-mark'),
		'add_new_item'      => __('Добавить метку', 'lab-mark'),
		'new_item_name'     => __('Новое название метки', 'lab-mark'),
		'menu_name'         => __('Метки', 'lab-mark'),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => false,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'rest_base'         => 'project-tags',
		'query_var'         => true,
		'rewrite'           => array('slug' => 'project-tag'),
	);

	register_taxonomy('project_tag', array('project'), $args);
}
add_action('init', 'lab_mark_register_project_tag');

/**
 * ============================================================
 * 4. CMB2 Meta Boxes для проекта
 * ============================================================
 */
function lab_mark_project_metaboxes()
{
	$prefix = '_labmark_';

	$cmb = new_cmb2_box(array(
		'id'           => 'labmark_project_metabox',
		'title'        => __('Детали проекта', 'lab-mark'),
		'object_types' => array('project'),
		'context'      => 'normal',
		'priority'     => 'high',
	));

	// Краткое описание для модального окна
	$cmb->add_field(array(
		'name'    => __('Описание для кейса', 'lab-mark'),
		'desc'    => __('Подробное описание проекта для модального окна «Смотреть кейс»', 'lab-mark'),
		'id'      => $prefix . 'case_description',
		'type'    => 'textarea',
		'rows'    => 4,
	));

	// Сроки
	$cmb->add_field(array(
		'name'    => __('Сроки реализации', 'lab-mark'),
		'desc'    => __('Например: 4-6 недель', 'lab-mark'),
		'id'      => $prefix . 'project_duration',
		'type'    => 'text',
	));

	// Результат
	$cmb->add_field(array(
		'name'    => __('Результат', 'lab-mark'),
		'desc'    => __('Например: Рост конверсии на 35%', 'lab-mark'),
		'id'      => $prefix . 'project_result',
		'type'    => 'text',
	));

	// URL превью-изображения (fallback если нет featured image)
	$cmb->add_field(array(
		'name'    => __('Изображение превью (URL)', 'lab-mark'),
		'desc'    => __('Необязательно. Если не указано, используется изображение записи.', 'lab-mark'),
		'id'      => $prefix . 'preview_url',
		'type'    => 'text_url',
	));

	// Градиентный фон (fallback)
	$cmb->add_field(array(
		'name'    => __('Градиентный фон (CSS)', 'lab-mark'),
		'desc'    => __('Используется, если нет изображения. Например: linear-gradient(135deg, #1a1a3e, #2d2d6b, #0a2540)', 'lab-mark'),
		'id'      => $prefix . 'bg_gradient',
		'type'    => 'text',
		'default' => 'linear-gradient(135deg, #0a2540, #0e3254, #050d1a)',
	));

	// Порядок сортировки
	$cmb->add_field(array(
		'name'    => __('Порядок сортировки', 'lab-mark'),
		'desc'    => __('Чем меньше число, тем выше проект в списке (по умолчанию 0)', 'lab-mark'),
		'id'      => $prefix . 'sort_order',
		'type'    => 'text_small',
		'default' => '0',
	));
}
add_action('cmb2_admin_init', 'lab_mark_project_metaboxes');

/**
 * ============================================================
 * 5. Добавить колонку «Порядок» в список проектов
 * ============================================================
 */
function lab_mark_add_project_order_column($columns)
{
	$columns['labmark_sort_order'] = __('Порядок', 'lab-mark');
	return $columns;
}
add_filter('manage_project_posts_columns', 'lab_mark_add_project_order_column');

function lab_mark_show_project_order_column($column, $post_id)
{
	if ('labmark_sort_order' === $column) {
		$order = get_post_meta($post_id, '_labmark_sort_order', true);
		echo esc_html($order ? $order : '0');
	}
}
add_action('manage_project_posts_custom_column', 'lab_mark_show_project_order_column', 10, 2);

function lab_mark_sortable_project_order_column($columns)
{
	$columns['labmark_sort_order'] = 'labmark_sort_order';
	return $columns;
}
add_filter('manage_edit-project_sortable_columns', 'lab_mark_sortable_project_order_column');

function lab_mark_order_column_sortable($query)
{
	if (! is_admin() || ! $query->is_main_query()) {
		return;
	}

	$orderby = $query->get('orderby');
	if ('labmark_sort_order' === $orderby) {
		$query->set('meta_key', '_labmark_sort_order');
		$query->set('orderby', 'meta_value_num');
	}
}
add_action('pre_get_posts', 'lab_mark_order_column_sortable');
