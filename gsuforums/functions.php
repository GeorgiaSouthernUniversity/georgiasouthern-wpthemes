<?php
/**
 * Theme Functions 
 */
// Remove wp version in meta
 remove_action('wp_head', 'wp_generator');

// On login screen, replaces WP logo with Georgia Southern logo
add_action("login_head", "custom_login_logo");

function custom_login_logo() {
	echo "
	<style>
	body.login #login h1 a {
		background: url('".get_bloginfo('template_url')."/images/gsu-logo.jpg') no-repeat scroll center top transparent;
		height: 200px;
		width: 300px;
	}
	.login #backtoblog a {display:none;}
	</style>
	";
}
// Add Pages Capability to Author Role
function add_gsudept_caps() {
$role = get_role( 'author' );  
$role->add_cap( 'edit_pages' );
$role->add_cap( 'publish_pages' );
$role->add_cap( 'edit_published_pages' );
$role->add_cap( 'unfiltered_html' ); 
}
add_action( 'admin_menu', 'add_gsudept_caps');

function remove_gsudept_caps() {
$role = get_role( 'administrator' );  
$role->remove_cap( 'activate_plugins' );
$role->remove_cap( 'delete_plugins' );
$role->remove_cap( 'delete_themes' );
$role->remove_cap( 'edit_plugins' );
$role->remove_cap( 'edit_themes' );
$role->remove_cap( 'import' );
$role->remove_cap( 'install_plugins' );
$role->remove_cap( 'install_themes' );
$role->remove_cap( 'switch_themes' );
$role->remove_cap( 'update_core' );
$role->remove_cap( 'update_plugins' );
$role->remove_cap( 'update_themes' );
$role->remove_cap( 'manage_sites' );
$role->remove_cap( 'manage_options' );
$role->remove_cap( 'remove_users' );
}
add_action( 'admin_menu', 'remove_gsudept_caps');

function add_gsudeptadmin_caps() {
$role = get_role( 'administrator' ); 
$role->add_cap( 'unfiltered_html' ); 
}
add_action( 'admin_menu', 'add_gsudeptadmin_caps');

// Register nav menus
add_action('init', 'register_custom_menu');
 
function register_custom_menu() {
register_nav_menu('department_navigation', __('Departmental Navigation'));
}

// Add Custom Header support
$args = array(
	'width'         => 920,
	'height'        => 310,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

// Register Sidebars
register_sidebar(array(
  'name' => __( 'Right Sidebar' ),
  'id' => 'right-sidebar',
  'description' => __( 'Widgets in this area will be shown in the right sidebar on all pages.' ),
  'before_widget' => '',
  'after_widget'  => "",
  'before_title' => '<h6 class="ribbon-right"><span>',
  'after_title' => '</span></h6><div class="ribbon-right-corner"></div>'
));

register_sidebar(array(
  'name' => __( 'Dept Footer' ),
  'id' => 'dept-footer',
  'description' => __( 'Footer content.' ),
  'before_widget' => '',
  'after_widget'  => "",
  'before_title' => '',
  'after_title' => ''
));


// Custom WordPress Admin Color Scheme
function admin_css() {
	wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/admin.css' );
}
add_action('admin_print_styles', 'admin_css' );

// Custom WordPress Admin Footer
function remove_footer_admin () {
	echo 'GSUDEPT Theme 2.0<br>2012 Marketing &amp; Communications and Information Technology Services Web Team, Georgia Southern University';
}
add_filter('admin_footer_text', 'remove_footer_admin');

// Customize wp admin bar
function remove_admin_bar_links() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
	$wp_admin_bar->remove_menu('updates');
	$wp_admin_bar->remove_menu('new-link');
	$wp_admin_bar->remove_menu('new-user');
	$wp_admin_bar->remove_menu('new-media');
}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );

// Customize tinymce editor
function disable_mce_buttons($init) {
	$init['theme_advanced_disable'] = 'wp_more,forecolor,underline';
	$init['theme_advanced_blockformats'] = 'p,h2,h3,h4,h5,h6';
	return $init;
}
add_filter('tiny_mce_before_init', 'disable_mce_buttons');

function enable_mce_buttons($opt) {
	$opt[] = 'sup,sub,hr';
	return $opt;
}
add_filter('mce_buttons_2', 'enable_mce_buttons');

// REMOVE LINKS, COMMENTS FROM ADMIN PANEL
function gsudept_remove_menu_pages() {		
		remove_menu_page('edit-comments.php');
		remove_menu_page('link-manager.php');		
		//remove_menu_page('users.php');
		//remove_menu_page('options-writing.php');
		//remove_menu_page('options-reading.php');
		//remove_menu_page('options-discussion.php');
		//remove_menu_page('options-privacy.php');
		//remove_menu_page('options-permalinks.php');
		//remove_menu_page('import.php');
		//remove_menu_page('upload.php');
		//remove_menu_page('tools.php');
		//remove_menu_page('options-general.php');
	}
add_action( 'admin_menu', 'gsudept_remove_menu_pages' );

// Removes unnecessary widgets from Appearance-->Widgets menu
function remove_wp_widgets() {
unregister_widget('WP_Widget_Calendar');
unregister_widget('WP_Widget_Pages');
unregister_widget('WP_Widget_Meta');
unregister_widget('WP_Widget_Tag_Cloud');
unregister_widget('WP_Widget_Search');
unregister_widget('WP_Widget_Recent_Comments');
unregister_widget('WP_Nav_Menu_Widget');
unregister_widget('WP_Widget_Links');
}
add_action('widgets_init','remove_wp_widgets', 1);
remove_action( 'widgets_init', 'akismet_register_widgets' );

// ADD CUSTOM OPTIONS TO GENERAL SETTINGS PANEL
$new_general_setting = new new_general_setting();
 
class new_general_setting {
    function new_general_setting( ) {
        add_filter( 'admin_menu' , array( &$this , 'register_fields' ) );
    }
    function register_fields() {
        register_setting( 'general', 'parent_college', 'esc_attr' );
        add_settings_field('parent_college', '<label for="parent_college">'.__('College' , 'parent_college' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        $value = get_option( 'parent_college', '' );
        echo '<input type="text" id="parent_college" name="parent_college" value="' . $value . '" />';
    }
}
// ADD CUSTOM OPTIONS TO ADMIN PANEL
//add_action( 'admin_menu', 'dept_contact_menu' );

function dept_contact_menu() {
	add_pages_page( 'Dept Contact Info', 'Dept Contact Info', 'manage_options', 'dept-contact-info', 'dept_contact_options' );
}

function dept_contact_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<div class="icon32" id="icon-edit-pages"><br /></div>';
	echo '<h2>Department Contact Info</h2>';
	echo '<p>The following information appears in the sidebar and footer of your site.</p>';
	// settings form
	?>
	<form name="form1" method="post" action="">
		<p>Department Name: 
			<input type="text" name="dept-name" size="40"></p>
		<p>Main Office Location: 
			<input type="text" name="dept-mainoffice" size="30"></p>
		<p>P.O. Box: 
			<input type="text" name="dept-pobox" size="5"></p>		
		<p>Zip Code: 
			<input type="text" name="dept-zipcode" size="5"></p>
		<p>Phone: 
			<input type="text" name="dept-phone" size="25"></p>
		<p>Fax: 
			<input type="text" name="dept-fax" size="25"></p>
		<p>Email: 
			<input type="text" name="dept-email" size="25"></p>
		<p class="submit">
			<input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
		</p>
	</form>
	</div>
	<?php
}

 // CHANGE POSTS TO NEWS
 function change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'News';
	$submenu['edit.php'][5][0] = 'News';
	$submenu['edit.php'][10][0] = 'Add News';
	$submenu['edit.php'][16][0] = 'News Tags';
	echo '';
}
function change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'News';
	$labels->singular_name = 'News';
	$labels->add_new = 'Add News';
	$labels->add_new_item = 'Add News';
	$labels->edit_item = 'Edit News';
	$labels->new_item = 'News';
	$labels->view_item = 'View News';
	$labels->search_items = 'Search News';
	$labels->not_found = 'No News found';
	$labels->not_found_in_trash = 'No News found in Trash';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

// CUSTOM SHORTCODES
function floatlist_shortcode( $atts, $content = null ) {
   return '<div class="floatleft">' . $content . '</div>';
}
add_shortcode( 'floatlist', 'floatlist_shortcode' );
