<?php 

add_action('wp_enqueue_scripts', 'load_scripts_and_style');


function load_scripts_and_style()
{
  $template_directory_uri = get_template_directory_uri();
  wp_enqueue_style('theme-style', $template_directory_uri . '/style.css', [], filemtime(get_template_directory() . '/style.css'));

  if (file_exists(get_template_directory() . '/dist/main.css')) {
    wp_enqueue_style('styles-bundle', $template_directory_uri . '/dist/main.css', [], filemtime(get_template_directory() . '/dist/main.css'));
  }
  
  if (file_exists(get_template_directory() . '/dist/main.js')) {
    wp_enqueue_script('js-bundle', $template_directory_uri . '/dist/main.js', [], filemtime(get_template_directory() . '/dist/main.js'), true);
  }
  
  wp_localize_script('js-bundle', 'WP', array(
    'root' => esc_url_raw(rest_url()),
    'nonce' => wp_create_nonce(),
    'base' => get_site_url(),
    'publicPath' => $template_directory_uri . "/dist/",
  ));
}

  // ADD IMAGE SIZE
  add_image_size('expo-thumbnail', 630, 670, ['center', 'center']);
  add_image_size('cover-banner', 1920, 1080, ['center', 'center']);
  add_image_size('slider-image', 500, 281, ['center', 'center']);
  add_image_size('gallery-img', 387, 387, ['center', 'center']);
  add_image_size('artists-img', 427, 455, ['center', 'center']);
  add_image_size('banner-about', 884, 497, ['center', 'center']);
  add_image_size('sponsor-logo', 228, 228, ['center', 'center']);

// ADD MENU 
function custom_register_nav_menu(){
  register_nav_menus( array(
      'primary_menu' => 'Menu principal',
  ) );
}
add_action( 'after_setup_theme', 'custom_register_nav_menu', 0 );


// ADD CUSTOM LOGO
add_theme_support( 'custom-logo', [
  'height' => 200,
  'width' => 200,
  'flex-height' => true,
	'flex-width' => true,
  ]);


  function p($args){
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
  }
  
  
  function d($args){
    p($args);
    die();
  }
  
  add_theme_support( 'title-tag' );

  function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/src/img/logo_home.png);
		        height: 80px;
            width: 80px;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
  return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
