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
  add_image_size('houses-banner', 1400, 600, ['center', 'center']);
  add_image_size('house-thumbnail', 400, 400, ['center', 'center']);

  //Add admin page to the menu
  function custom_theme_settings() {
    add_menu_page(
    "Réglages l'Épicerie", 
    "L'épicerie", 
    'manage_options', 
    'epicerie', 
    'custom_text_settings_page', 
    'dashicons-admin-customizer');

    register_setting('custom-text-settings-group', 'enable_custom_bar', 'intval');
    register_setting('custom-text-settings-group', 'enable_scrolling', 'intval');
    register_setting('custom-text-settings-group', 'custom_text_bar');
    register_setting('custom-text-settings-group', 'custom_color_bar');
    register_setting('custom-text-settings-group', 'custom_color_bar_text');
}
add_action('admin_menu', 'custom_theme_settings');


function custom_text_settings_page() {
  //Get the active tab from the $_GET param
  $default_tab = null;
  $tab = isset($_GET['tab']) ? $_GET['tab'] : $default_tab;
  ?>
   <!-- Our admin page content should all be inside .wrap -->
   <div class="wrap">
    <!-- Print the page title -->
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
    <!-- Here are our tabs -->
    <nav class="nav-tab-wrapper">
      <a href="?page=epicerie" class="nav-tab <?php if($tab===null):?>nav-tab-active<?php endif; ?>">Barre de texte</a>
      <a href="?page=epicerie&tab=horaires" class="nav-tab <?php if($tab==='horaires'):?>nav-tab-active<?php endif; ?>">Horaires</a>
      <a href="?page=epicerie&tab=tools" class="nav-tab <?php if($tab==='tools'):?>nav-tab-active<?php endif; ?>">Tools</a>
    </nav>

    <div class="tab-content">
    <?php switch($tab) :
      case 'horaires':
       ?>
        <div class="wrap">
          <h2>Réglage des horaires d'ouverture</h2>
          <form action="options.php" method="post">
            <select name="" multiple id="">
              <option value="Lundi">Lundi</option>
              <option value="Mardi">Mardi</option>
              <option value="Mercredi">Mercredi</option>
              <option value="Jeudi">Jeudi</option>
              <option value="Vendredi">Vendredi</option>
              <option value="Samedi">Samedi</option>
              <option value="Dimanche">Dimanche</option>
            </select>

          </form>
        </div>
       <?php
        break;
      case 'tools':
        echo 'Tools';
        break;
      default:
       ?>
  <div class="wrap">
      <h2>Réglage de la barre de texte</h2>
      <form method="post" action="options.php">
          <?php settings_fields('custom-text-settings-group'); ?>
          <?php do_settings_sections('custom-text-settings-group'); ?>

          <label for="enable_custom_bar">Activer la Barre :</label>
          <input type="checkbox" name="enable_custom_bar" <?php checked(get_option('enable_custom_bar'), 1); ?> value="1" />
         
          <br>
          <br>

          <label for="enable_scrolling">Activer le défilement :</label>
          <input type="checkbox" name="enable_scrolling" <?php checked(get_option('enable_scrolling'), 1); ?> value="1" />

          <br>
          <br>

          <label for="custom_text_bar">Texte de la Barre :</label>
          <input type="text" name="custom_text_bar" value="<?php echo esc_attr(get_option('custom_text_bar', 'Texte par défaut')); ?>" />

          <br>
          <br>

          <label for="custom_color">Couleur de la barre :</label>
          <input type="color" name="custom_color_bar" value="<?php echo esc_attr(get_option('custom_color_bar', '#001fbd')); ?>" class="my-color-field" data-default-color="#effeff" />
          
          <br>
          <br>

          <label for="custom_color">Couleur du texte de la barre :</label>
          <input type="color" name="custom_color_bar_text" value="<?php echo esc_attr(get_option('custom_color_bar_text', '#141413')); ?>" class="my-color-field" data-default-color="#effeff" />

          <?php submit_button(); ?>
      </form>
  </div>
       <?php
        break;
    endswitch; ?>
    </div>
  </div>
  <?php
}


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
  