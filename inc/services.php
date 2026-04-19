<?php
// inc/services.php

/**
 * Services Custom Taxonomy & Post Type
 *
 * @package lab-mark
 */

// Exit if accessed directly.
if (! defined('ABSPATH')) {
    exit;
}

/**
 * ============================================================
 * 1. Register Custom Post Type: service (Опционально)
 *    Если планируется отдельный пост-тип для услуг.
 *    В противном случае, таксономия будет привязана к 'project'.
 * ============================================================
 */

function lab_mark_register_service_cpt()
{
    $labels = array(
        'name'               => __('Услуги', 'lab-mark'),
        'singular_name'      => __('Услуга', 'lab-mark'),
        'menu_name'          => __('Услуги', 'lab-mark'),
        'add_new'            => __('Добавить услугу', 'lab-mark'),
        'add_new_item'       => __('Добавить новую услугу', 'lab-mark'),
        'edit_item'          => __('Редактировать услугу', 'lab-mark'),
        'new_item'           => __('Новая услуга', 'lab-mark'),
        'view_item'          => __('Просмотр услуги', 'lab-mark'),
        'search_items'       => __('Найти услугу', 'lab-mark'),
        'not_found'          => __('Услуги не найдены', 'lab-mark'),
        'not_found_in_trash' => __('Услуги не найдены в корзине', 'lab-mark'),
        'all_items'          => __('Все услуги', 'lab-mark'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true, // Например, yoursite.com/services/
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'rest_base'          => 'services',
        'query_var'          => true,
        'rewrite'            => array('slug' => 'services'),
        'capability_type'    => 'post',
        'hierarchical'       => false, // Обычно для услуг не используют иерархию, но можно изменить.
        'menu_position'      => 6, // Пример позиции в меню
        'menu_icon'          => 'dashicons-admin-tools', // Выберите подходящую иконку
        'supports'           => array('title', 'editor', 'thumbnail'), // Настройте по необходимости
    );

    register_post_type('service', $args);
}
add_action('init', 'lab_mark_register_service_cpt');


/**
 * ============================================================
 * 2. Register Taxonomy: service_category (Категории услуг)
 *    Иерархическая таксономия для классификации услуг.
 *    Примеры: Веб-дизайн -> Лендинги, Разработка -> Веб-приложения
 *    Привязывается к пост-типу 'project'. Если создаете 'service', замените 'project' на 'service'.
 * ============================================================
 */
function lab_mark_register_service_category()
{
    $labels = array(
        'name'              => __('Категории услуг', 'lab-mark'),
        'singular_name'     => __('Категория услуги', 'lab-mark'),
        'search_items'      => __('Найти категорию', 'lab-mark'),
        'all_items'         => __('Все категории услуг', 'lab-mark'),
        'parent_item'       => __('Родительская категория', 'lab-mark'),
        'parent_item_colon' => __('Родительская категория:', 'lab-mark'),
        'edit_item'         => __('Редактировать категорию услуги', 'lab-mark'),
        'update_item'       => __('Обновить категорию услуги', 'lab-mark'),
        'add_new_item'      => __('Добавить новую категорию услуги', 'lab-mark'),
        'new_item_name'     => __('Новое название категории услуги', 'lab-mark'),
        'menu_name'         => __('Категории услуг', 'lab-mark'),
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true, // Важно для иерархии
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rest_base'         => 'service-categories',
        'query_var'         => true,
        'rewrite'           => array('slug' => 'service-category'), // URL slug для таксономии
    );

    // Привязываем к 'project'. Если будет отдельный тип 'service', замените 'project'.
    register_taxonomy('service_category', array('service'), $args);
}
add_action('init', 'lab_mark_register_service_category');

// Здесь можно добавить регистрацию метабоксов для 'service' или 'project' через CMB2, если нужно.
// Например, если к проекту нужно будет привязать конкретную услугу или услуги.
// function lab_mark_service_metaboxes() { ... }
// add_action('cmb2_admin_init', 'lab_mark_service_metaboxes');
