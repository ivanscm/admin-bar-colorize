<?php
/**
 * @package admin-bar-colorize
 */

add_action( 'admin_menu', 'admin_bar_colorize_admin_menu' );
add_action( 'admin_init', 'admin_bar_colorize_settings_init' );

function admin_bar_colorize_admin_menu()
{
	add_options_page(
		__('Admin Bar Colorize', 'admin-bar-colorize' ),
		__('Admin Bar Colorize', 'admin-bar-colorize' ),
		'manage_options',
		'admin-bar-colorize',
		'admin_bar_colorize_options_page'
	);
}

function admin_bar_colorize_settings_init()
{
	register_setting( 'admin_bar_colorize_pluginPage', 'admin_bar_colorize_settings' );

	add_settings_section(
		'admin_bar_colorize_pluginPage_section',
		__('Choice colors', 'admin-bar-colorize' ),
		'admin_bar_colorize_settings_section_callback',
		'admin_bar_colorize_pluginPage'
	);

	add_settings_field(
		'admin_bar_colorize_primary_color',
		__('Primary color', 'admin-bar-colorize'),
		'admin_bar_colorize_primary_color_render',
		'admin_bar_colorize_pluginPage',
		'admin_bar_colorize_pluginPage_section'
	);

	add_settings_field(
		'admin_bar_colorize_secondary_color',
		__('Secondary color', 'admin-bar-colorize'),
		'admin_bar_colorize_secondary_color_render',
		'admin_bar_colorize_pluginPage',
		'admin_bar_colorize_pluginPage_section'
	);

	add_settings_field(
		'admin_bar_colorize_text_color',
		__('Text color', 'admin-bar-colorize'),
		'admin_bar_colorize_text_color_render',
		'admin_bar_colorize_pluginPage',
		'admin_bar_colorize_pluginPage_section'
	);

	add_settings_field(
		'admin_bar_colorize_highlight_color',
		__('Highlight color', 'admin-bar-colorize'),
		'admin_bar_colorize_highlight_color_render',
		'admin_bar_colorize_pluginPage',
		'admin_bar_colorize_pluginPage_section'
	);

}

function admin_bar_colorize_primary_color_render()
{
	admin_bar_colorize_input_render('primary');
}

function admin_bar_colorize_secondary_color_render()
{
	admin_bar_colorize_input_render('secondary');
}

function admin_bar_colorize_text_color_render()
{
	admin_bar_colorize_input_render('text');
}

function admin_bar_colorize_highlight_color_render()
{
	admin_bar_colorize_input_render('highlight');
}

function admin_bar_colorize_settings_section_callback()
{
  echo __('Select the appropriate color and click "Save."', 'admin-bar-colorize' );
}

function admin_bar_colorize_options_page()
{
	?>
	<form action='options.php' method='post'>
    <h1><?php _e('Admin Bar Colorize', 'admin-bar-colorize' ); ?></h1>
		<?php
		settings_fields( 'admin_bar_colorize_pluginPage' );
		do_settings_sections( 'admin_bar_colorize_pluginPage' );
		submit_button();
		?>
	</form>
	<?php
}
?>
