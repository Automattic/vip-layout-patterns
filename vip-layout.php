<?php

/**
 * Plugin Name: VIP Layout Blocks
 * Plugin URI: https://github.com/Automattic/vip-layout-blocks
 * Description: WordPress VIP Plugin for layout blocks
 * Author: WordPress VIP
 * Text Domain: vip-layout
 * Version: 0.1.0
 * Requires at least: 6.1
 * Requires PHP: 8.0
 *
 * @package vip-layout-blocks
 */

namespace VIP_Layout;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function register_vip_layout_blocks()
{
    register_block_type(__DIR__ . '/build/blocks/highlight');
    register_block_type(__DIR__ . '/build/blocks/highlights-layout');
}
add_action('init', 'VIP_Layout\register_vip_layout_blocks');
