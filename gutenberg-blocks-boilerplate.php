<?php
/**
 * Plugin Name: Gutenberg Blocks Boilerplate
 * Description: A WordPress plugin that adds Gutenberg Blocks Boilerplate for Block development.
 * Plugin URI:  https://codeytek.com/
 * Author:      Imran Sayed
 * Author URI:  https://codeytek.com
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version:     1.0.0
 * Text Domain: gutenberg-blocks-boilerplate
 *
 * @package headless-cms
 */

define( 'GUTENBERG_BLOCK_BOILERPLATE_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'GUTENBERG_BLOCK_BOILERPLATE_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'GUTENBERG_BLOCK_BOILERPLATE_BUILD_URI', untrailingslashit( plugin_dir_url( __FILE__ ) ) . '/assets/build' );
define( 'GUTENBERG_BLOCK_BOILERPLATE_BUILD_DIR', untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/assets/build' );
define( 'GUTENBERG_BLOCK_BOILERPLATE_TEMPLATE_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/templates/' );
