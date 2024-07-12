<?php

/**
 * Plugin Name: VIP Layout Patterns
 * Plugin URI: https://github.com/Automattic/vip-layout-patterns
 * Description: WordPress VIP Layout Patterns plugin
 * Author: WordPress VIP
 * Text Domain: vip-layout
 * Version: 0.2.0
 * Requires at least: 6.1
 * Requires PHP: 8.0
 *
 * @package vip-layout-patterns
 */

namespace VIP_Layout;

if (!defined("ABSPATH")) {
    exit(); // Exit if accessed directly.
}

function register_vip_layout_patterns()
{
    $pattern_names = array(
        'large-four',
    );

    foreach ($pattern_names as $pattern_name) {
        $pattern           = require __DIR__ . '/src/block-patterns/' . $pattern_name . '.php';
        $pattern['source'] = 'vip-layout';
        register_block_pattern('vip-layout/' . $pattern_name, $pattern);
    }

    register_block_pattern_category(
        'layout',
        array(
            'label'       => _x('Layout', 'Block pattern category', 'vip-layout'),
            'description' => __('Pattern layouts for parts of the page.', 'vip-layout'),
        )
    );

    register_block_style('core/cover', array(
        'name'         => 'full-link',
        'label'        => 'Link',
        'inline_style' => '.wp-block-cover.is-style-full-link a:after {
            display:block;
            position:absolute;
            left:0;
            top:0;
            width:100%;
            height:100%;
            content:"";
        }'
    ));
}
add_action('init', 'VIP_Layout\register_vip_layout_patterns');
