<?php
if ( ! function_exists( 'demo_theme_setup' ) ) {
  function demo_theme_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats',
      array(
         'image',
         'video',
         'gallery',
         'quote',
         'link'
      )
   );
  }
  add_action ( 'init', 'demo_theme_setup' );
  /* Register custom background */
  $default_background = array(
      'default-color' => '#eeeeee',
  );
  add_theme_support('custom-background', $default_background);
  /* Register Primary Menus */
  register_nav_menu('primary-menu', __('Primary Menu', 'demo'));
}
if (!function_exists('demo_widgets')) {
  add_action('widgets_init', 'demo_widgets');
  function demo_widgets() {
    // Page Sidebar
    register_sidebar(
      array(
        'name' => __('Main Sidebar', 'demo'),
        'id' => 'main-sidebar',
        'description' => __('The widgets added in this sidebar will appear on single pages.', 'demo'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget-title"><h5>',
        'after_title' => '</h5></div>',
      )       
    );
  }
}
if (!function_exists('demo_enqueue_stylesheets')) {
  add_action('wp_enqueue_scripts', 'demo_enqueue_stylesheets');
  function demo_enqueue_stylesheets() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '3.3.6', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome.min.css', array(), '4.5.0', 'all');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/scss/main.css', array(), '', 'all');
  }
}
if (!function_exists('demo_enqueue_javascripts')) {
    add_action('wp_enqueue_scripts', 'demo_enqueue_javascripts');
    function demo_enqueue_javascripts() {
      wp_enqueue_script('js-bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.6', true);
    }
}
/* * @ Display menu * */
if (!function_exists('demo_menu')) {
  function demo_menu($slug) {
    $menu = array(
      'theme_location' => $slug,
      'container' => 'nav',
      'container_class' => $slug,
    );
    wp_nav_menu($menu);
  }
}
if (!function_exists('demo_entry_header')) {
  function demo_entry_header() {
    if (is_single()) :
      ?>
      <h1 class="entry-title">
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
          <?php the_title(); ?>
        </a>
      </h1>
    <?php else : ?>
      <h2 class="entry-title">
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute();?>">
          <?php the_title(); ?>
        </a>
      </h2><?php
    endif;
  }
}
if ( ! function_exists( 'demo_entry_content' ) ) {
  function demo_entry_content() {
    if ( ! is_single() ) :
      the_excerpt();
    else :
      the_content();
      $link_pages = array(
        'before' => __('<p>Page:', 'demo'),
        'after' => '</p>',
        'nextpagelink'     => __( 'Next page', 'demo' ),
        'previouspagelink' => __( 'Previous page', 'demo' )
      );
      wp_link_pages( $link_pages );
    endif;
  }
}
if ( ! function_exists( 'demo_thumbnail' ) ) {
  function demo_thumbnail($size ) {
    if (! is_single() &&  has_post_thumbnail()  && ! post_password_required() || has_post_format( 'image' ) ) : ?>
      <figure class="post-thumbnail"><?php the_post_thumbnail( $size ); ?></figure><?php
    endif;
  }
}
