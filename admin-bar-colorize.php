<?php
/**
 * @package admin-bar-colorize
 */
/*
Plugin Name: Admin Bar Colorize
Author: Kod42 Team
Author URI: http://kod42.ru/
Description: Custom color for admin bar.
Version: 1.0
Text Domain: admin-bar-colorize
*/

$admin_bar_colorize_default_colors = array (
  'primary'       => '#23282d',
  'secondary'     => '#23282d',
  'highlight'     => '#0073aa',
  'text'          => '#FFFFFF',
);

function admin_bar_colorize_get_color($name)
{
  global $admin_bar_colorize_default_colors;
  $options = get_option( 'admin_bar_colorize_settings' );
  return (isset($options[$name])) ? $options[$name] : $admin_bar_colorize_default_colors[$name];
}

function _abc_color($name)
{
  echo admin_bar_colorize_get_color($name);
}

function admin_bar_colorize_input_render($name)
{
  $default = admin_bar_colorize_get_color($name);
	echo "<input class=\"admin-bar-colorize-color\" id=\"admin_bar_colorize_{$name}_color\" name=\"admin_bar_colorize_settings[{$name}]\" value=\"$default\">";
}

function admin_bar_colorize_init_language()
{
  $plugin_dir = basename(dirname(__FILE__));
  load_plugin_textdomain( 'admin-bar-colorize', false, $plugin_dir.'/languages' );
}

include('settings_functions.php');

function admin_bar_colorize_init()
{
  admin_bar_colorize_init_language();
}
add_action('plugins_loaded', 'admin_bar_colorize_init');

function admin_bar_colorize_head() {
  include ('style.php');
  wp_enqueue_script( 'jq_color_picker_min', plugin_dir_url( __FILE__ ) . 'js/jqColorPicker.min.js' );
  echo '<script type="text/javascript">'; ?>
    $j=jQuery.noConflict();
    $j(document).ready(function() {
      $j('.admin-bar-colorize-color').colorPicker({
        opacity: false,
      });
    });
  <?php echo '</script>';
}
add_action('wp_head','admin_bar_colorize_head');
add_action('admin_head', 'admin_bar_colorize_head');

?>
