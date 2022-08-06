<?php 

/*
* Theme support
*/
add_action(
    'after_setup_theme',
    function() {
        add_theme_support( 'html5', [ 'script', 'style' ] );
        add_theme_support( 'custom-logo', array(
          'height'      => 100,
          'width'       => 200,
          'flex-height' => true,
          'flex-width'  => true,
          'header-text' => array( 'site-title', 'site-description' ),
        ) );
    }
);

/*
* Title and thumbnails
*/
function btax1_title_and_thumbs() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  //add_image_size('index-thumb', 360, 230, true);
  //add_image_size('post-thumb', 751, 400, true);
}
add_action( 'after_setup_theme', 'btax1_title_and_thumbs' );

if (!function_exists( 'wp_render_title_tag' )){
    function btax1_render_title() {
        ?>
<title><?php wp_title('-', true, 'right'); ?></title>
<?php
    }
add_action( 'wp_head', 'btax1_render_title' );
}

/*
* Menus
*/
register_nav_menus( array(
    'menu-principal'  => __( 'Menu Principal', 'ab' )
));

/*
* Call CSS and JS files.
*/
function bta_theme_script_and_style_includer() {
  // css -> head
  wp_enqueue_style( 
    'bootstrap.min',
    get_theme_file_uri( '/assets/css/bootstrap.min.css' )
  );
  wp_enqueue_style( 
    'preloader',
    get_theme_file_uri( '/assets/css/preloader.css' )
  );
	wp_enqueue_style( 
		'main',
		get_theme_file_uri( '/assets/css/main.css' )
  );
	wp_enqueue_style( 
		'responsive',
		get_theme_file_uri( '/assets/css/responsive.css' )
	);

  // js -> footer
  wp_enqueue_script(
		'jquery-slim.min',
		get_template_directory_uri() . '/assets/js/jquery-slim.min.js', array(), false, true 
  );
  wp_enqueue_script(
    'popper.min',
    get_template_directory_uri() . '/assets/js/popper.min.js', array(), false, true
  );    
  wp_enqueue_script(
    'bootstrap.min',
    get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), false, true
  );    
  wp_enqueue_script(
    'custom',
    get_template_directory_uri() . '/assets/js/custom.js', array(), false, true
  );    
}
add_action( 'wp_enqueue_scripts', 'bta_theme_script_and_style_includer' );

/*
* Unregister default widgets
*/
function unregister_default_widgets(){
  unregister_widget('WP_Widget_Pages');
  unregister_widget('WP_Widget_Calendar');
  unregister_widget('WP_Widget_Archives');
  unregister_widget('WP_Widget_Links');
  unregister_widget('WP_Widget_Meta');
  unregister_widget('WP_Widget_Search');
  unregister_widget('WP_Widget_Categories');
  unregister_widget('WP_Widget_Recent_Posts');
  unregister_widget('WP_Widget_Recent_Comments');
  unregister_widget('WP_Widget_RSS');
  unregister_widget('WP_Widget_Text');
  unregister_widget('WP_Widget_Tag_Cloud');
  unregister_widget('WP_Widget_Custom_HTML');
  unregister_widget('WP_Widget_Media_Video');
  unregister_widget('WP_Widget_Media_Image');
  unregister_widget('WP_Widget_Media_Audio');
  unregister_widget('WP_Widget_Media_Gallery');
  unregister_widget('WP_Nav_Menu_Widget');
}
add_action( 'widgets_init', 'unregister_default_widgets' );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/*
* Remove dashicons
*/
function bs_dequeue_dashicons() {
    if ( ! is_user_logged_in() ) {
        wp_deregister_style( 'dashicons' );
    }
}
add_action( 'wp_enqueue_scripts', 'bs_dequeue_dashicons' );

/* 
* Remove comments function
*/

// Removes from admin menu
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'my_remove_admin_menus' );
// Removes from post and pages
function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
add_action( 'init', 'remove_comment_support', 100 );
// Removes from admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

/*
* Wordpress
*/

// Security - Protect from malicious request
global $user_ID; if($user_ID) {
  if(!current_user_can('administrator')) {
      if (strlen($_SERVER['REQUEST_URI']) > 255 ||
          stripos($_SERVER['REQUEST_URI'], "eval(") ||
          stripos($_SERVER['REQUEST_URI'], "CONCAT") ||
          stripos($_SERVER['REQUEST_URI'], "UNION+SELECT") ||
          stripos($_SERVER['REQUEST_URI'], "base64")) {
              @header("HTTP/1.1 414 Request-URI Too Long");
              @header("Status: 414 Request-URI Too Long");
              @header("Connection: Close");
              @exit;
      }
  }
}

// Security - remove wordpress version
function wpbeginner_remove_version() {
  return '';
}
add_filter( 'the_generator', 'wpbeginner_remove_version' );

// Wordpress - Enable SVG upload
function smartwp_enable_svg_upload( $mimes ) {
  if ( !current_user_can( 'administrator' ) ) {
    return $mimes;
  }
  $mimes['svg']  = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  
  return $mimes;
}
add_filter( 'upload_mimes', 'smartwp_enable_svg_upload' );

// Wordpress - Remove comment URL field
function remove_comment_fields($fields) {
  unset($fields['url']);
  return $fields;
}
add_filter( 'comment_form_default_fields','remove_comment_fields' );

// Wordpress - Customize login logo
function custom_login_logo() { 
  echo '<style type="text/css"> 
  h1 a { background-image:url('.get_bloginfo('template_directory').'/assets/imgs/logo.png) !important; width: 200px !important; background-size: 200px !important; } 
  </style>'; 
} 
add_action( 'login_head', 'custom_login_logo' ); 

function custom_admin_logo() { 
  echo '<style type="text/css"> 
  #header-logo { background-image: url('.get_bloginfo('template_directory').'/assets/imgs/logo.png) !important; } 
  </style>'; 
  } 
add_action( 'admin_head', 'custom_admin_logo' ); 

// Wordpress - Change footer text
function remove_footer_admin () { 
  echo 'By <a href="https://btacreative.com.br" target="_new">BTA Creative</a> made with <a href="http://wordpress.org" target="_new">WordPress</a>.'; 
  } 
add_filter( 'admin_footer_text', 'remove_footer_admin' ); 

// Wordpress - Limit to post revisions
if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', 5);
if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', false);

// Wordpress - Empty trash in 15 days
define('EMPTY_TRASH_DAYS', 15);

// Wordpress - Autosave interval set to 5 minutes
define('AUTOSAVE_INTERVAL', 300); 

// Add extra columns to the user display dashboard
function theme_add_user_zip_code_column( $columns ) {
  return array_merge( $columns, 
    array(
      'zip' => __('Zip'),
      'address' => __('Address'),
      'number' => __('number'),
      'district' => __('district'),
      'city' => __('city'),
      'state' => __('state'),
    ) 
  );
}
add_filter( 'manage_users_columns', 'theme_add_user_zip_code_column' );

// Show extra columns with from specified user.
function theme_show_user_zip_code_data( $value, $column_name, $user_id ) {

  if ( 'zip' == $column_name ) {
    //Custom value
    $val = get_user_meta($user_id, 'zip', true);
  }
  if ( 'address' == $column_name ) {
      //Custom value
      $val = get_user_meta($user_id, 'address', true);
  }
  if ( 'number' == $column_name ) {
    //Custom value
    $val = get_user_meta($user_id, 'number', true);
  }
  if ( 'district' == $column_name ) {
    //Custom value
    $val = get_user_meta($user_id, 'district', true);
  }
  if ( 'city' == $column_name ) {
    //Custom value
    $val = get_user_meta($user_id, 'city', true);
  }
  if ( 'state' == $column_name ) {
    //Custom value
    $val = get_user_meta($user_id, 'state', true);
  }
  return $val;

}
add_action( 'manage_users_custom_column', 'theme_show_user_zip_code_data', 10, 3 );

function redirect_account_page()
{
    if(is_page("account") && !is_user_logged_in())
    {
        $loginUrl = home_url('/');
        wp_redirect($loginUrl);
        exit(); 
    }

    if (is_user_logged_in()) {
      if (is_front_page()){
        wp_redirect('account/');
        exit; 
      }
    }

}
add_action( 'template_redirect', 'redirect_account_page' );