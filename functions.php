<?php

/**
 * @package learning-to-research
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/inc/tgm-plugin-activation/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'learning_to_research_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function learning_to_research_register_required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin pre-packaged with a theme

		/* array(
			'name'     				=> 'TGM Example Plugin', // The plugin name
			'slug'     				=> 'tgm-example-plugin', // The plugin slug (typically the folder name)
			'source'   				=> get_stylesheet_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		), */

		// Include plugins from the WordPress.org Plugin Repository
		array(
			'name'		=> 'Creative Commons Configurator',
			'slug'		=> 'creative-commons-configurator-1',
			'required'	=> true,
		),
		array(
			'name'		=> 'MathJax-LaTeX',
			'slug'		=> 'mathjax-latex',
			'required'	=> true,
		),
		array(
			'name'		=> 'P2 By Email',
			'slug'		=> 'p2-by-email',
			'required'	=> true,
		),
		array(
			'name'		=> 'P2 Likes',
			'slug'		=> 'p2-likes',
			'required'	=> true,
		),
		array(
			'name'		=> 'Image Widget',
			'slug'		=> 'image-widget',
			'required'	=> true,
		),


	);

	// Change this to your theme text domain, used for internationalising strings
	$theme_text_domain = 'p2';

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'       		=> $theme_text_domain,         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins', $theme_text_domain ),
			'menu_title'                       			=> __( 'Install Plugins', $theme_text_domain ),
			'installing'                       			=> __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', $theme_text_domain ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
			'return'                           			=> __( 'Return to Required Plugins Installer', $theme_text_domain ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', $theme_text_domain ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', $theme_text_domain ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);

	tgmpa( $plugins, $config );

}

// Modernizr for HTML5 and media query support for older browsers
// FitVids.js for responsive embedded videos
add_action('wp_enqueue_scripts', 'p2_responsive_js');
function p2_responsive_js() {
	wp_enqueue_script('Modernizr', get_template_directory_uri() .'../../p2-responsive/js/modernizr.min.js', '', '2.0.6');
	wp_enqueue_script('FitVids', get_template_directory_uri() .'../../p2-responsive/js/jquery.fitvids.js', array('jquery'), '1.0');
}


// Enable Figure + FigCaption for images and remove width style from caption so it responds well. 
function mytheme_caption( $attr, $content = null ) {
    $output = apply_filters( 'img_caption_shortcode', '', $attr, $content );
    if ( $output != '' )
        return $output;

    extract( shortcode_atts ( array(
    'id' => '',
    'align' => 'alignnone',
    'width'=> '',
    'caption' => ''
    ), $attr ) );

    if ( 1 > (int) $width || empty( $caption ) )
        return $content;

    if ( $id ) $id = 'id="' . $id . '" ';

    return '<figure ' . $id . 'class="wp-caption ' . $align . '" >'
. do_shortcode( $content ) . '<figcaption class="wp-caption-text">' . $caption . '</figcaption></figure>';
}

add_shortcode( 'wp_caption', 'mytheme_caption' );
add_shortcode( 'caption', 'mytheme_caption' ); 

// Rewriten p2_comments with span.actions at the bottom
function p2_responsive_comments( $comment, $args ) {
	$GLOBALS['comment'] = $comment;

	if ( !is_single() && get_comment_type() != 'comment' )
		return;

	$depth          = prologue_get_comment_depth( get_comment_ID() );
	$can_edit_post  = current_user_can( 'edit_post', $comment->comment_post_ID );

	$reply_link     = prologue_get_comment_reply_link(
		array( 'depth' => $depth, 'max_depth' => $args['max_depth'], 'before' => ' | ', 'reply_text' => __( 'Reply', 'p2' ) ),
		$comment->comment_ID, $comment->comment_post_ID );

	$content_class  = 'commentcontent';
	if ( $can_edit_post )
		$content_class .= ' comment-edit';

	?>
	<li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
		<?php do_action( 'p2_comment' ); ?>

		<?php echo get_avatar( $comment, 32 ); ?>
		<h4>
			<?php echo get_comment_author_link(); ?>
			<span class="meta">
				<?php echo p2_date_time_with_microformat( 'comment' ); ?>
				
			</span>
		</h4>
		<div id="commentcontent-<?php comment_ID(); ?>" class="<?php echo esc_attr( $content_class ); ?>"><?php
				echo apply_filters( 'comment_text', $comment->comment_content );

				if ( $comment->comment_approved == '0' ): ?>
					<p><em><?php esc_html_e( 'Your comment is awaiting moderation.', 'p2' ); ?></em></p>
				<?php endif; ?>
				
				<span class="actions">
					<a href="<?php echo esc_url( get_comment_link() ); ?>"><?php _e( 'Permalink', 'p2' ); ?></a>
					<?php
					echo $reply_link;

					if ( $can_edit_post )
						edit_comment_link( __( 'Edit', 'p2' ), ' | ' );

					?>
				</span>
		</div>
		
	<?php
}

/**
 * P2 by Email plugin (p2be)
 *
 * Instructions:
 * 1. Register a Gmail or similar email account that supports IMAP.
 * 2. Add the code snippet below with account details to your theme's functions.php file.
 *    It tells P2 By Email that you're set up to use post or reply by email.
 * 3. Install wp-cli and set up a system cron job to regularly call wp p2-by-email ingest-emails.
 * 
 */

require_once dirname( __FILE__ ) . '/private.php';

add_filter( 'p2be_email_replies_enabled', '__return_true' );
add_filter( 'p2be_emails_reply_to_email', function( $email ) {
    return $p2be_details['username'] ;
});
add_filter( 'p2be_imap_connection_details', function( $details ) {

    $details['host'] = $p2be_details['host'];
    $details['username'] = $p2be_details['username'];
    $details['password'] = $p2be_details['password'];

    return $p2be_details;
} );

?>
