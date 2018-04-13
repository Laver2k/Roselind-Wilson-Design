<?php
add_theme_support( 'post-thumbnails' );
add_image_size( 'mobile-crop-square', 640, 640, false );
add_image_size( 'portfolio-listing', 1000, 550, array( 'center', 'center') );
add_image_size( 'portfolio-listing-small', 500, 275, array( 'center', 'center') );

//Disable tags
function unregister_tags() {
    unregister_taxonomy_for_object_type( 'post_tag', 'post' );
}
add_action( 'init', 'unregister_tags' );

//Main theme Styles
function add_theme_styles() {
    echo "<link rel='stylesheet' href='".get_stylesheet_uri()."'>";
}
add_action( 'wp_head', 'add_theme_styles' );


//Custom Styles
function customStyles(){
	wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i', false );
	wp_enqueue_style( 'slick-slider-css', get_template_directory_uri()."/_/js/slick/slick.css", false );
}
add_action( 'wp_enqueue_scripts', 'customStyles' );


//Custom Scripts
function customScripts(){
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'slick-slider-js', get_template_directory_uri()."/_/js/slick/slick.min.js", true );
  wp_enqueue_script( 'jquery-masonry');
  wp_enqueue_script( 'imagesloaded', get_template_directory_uri()."/_/js/min/imagesloaded.min.js", true );
  wp_enqueue_script( 'modernizr-custom', get_template_directory_uri()."/_/js/min/modernizr-custom.js", true );
	wp_enqueue_script( 'ready-scripts', get_template_directory_uri()."/_/js/scripts-min.js", true );
}
add_action( 'wp_enqueue_scripts', 'customScripts' );


//menus
function register_my_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Top Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'blog-menu' => __( 'Blog Menu' ),
      'side-menu' => __( 'Side Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



function posts_nav() {
 
  if( is_singular() )
      return;

  global $wp_query;

  /** Stop execution if there's only 1 page */
  if( $wp_query->max_num_pages <= 1 )
      return;

  $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
  $max   = intval( $wp_query->max_num_pages );

  /** Add current page to the array */
  if ( $paged >= 1 )
      $links[] = $paged;
  /** Add the pages around the current page to the array */
  if ( $paged >= 3 ) {
      $links[] = $paged - 1;
      $links[] = $paged - 2;
  }
  if ( ( $paged + 2 ) <= $max ) {
      $links[] = $paged + 2;
      $links[] = $paged + 1;
  }

  echo '<div class="navigation"><ul>' . "\n";

  /** Previous Post Link */
  if ( get_previous_posts_link() )
      //printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

  /** Link to first page, plus ellipses if necessary */
  if ( ! in_array( 1, $links ) ) {
      $class = 1 == $paged ? ' class="active"' : '';
      printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
      if ( ! in_array( 2, $links ) )
          echo '<li>…</li>';
  }

  /** Link to current page, plus 2 pages in either direction if necessary */
  sort( $links );
  foreach ( (array) $links as $link ) {
      $class = $paged == $link ? ' class="active"' : '';
      printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
  }

  /** Link to last page, plus ellipses if necessary */
  if ( ! in_array( $max, $links ) ) {
      if ( ! in_array( $max - 1, $links ) )
          echo '<li>…</li>' . "\n";
      $class = $paged == $max ? ' class="active"' : '';
      printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
  }

  /** Next Post Link */
    if ( get_next_posts_link() ) {
      //  printf( '<li>%s</li>' . "\n", get_next_posts_link() );
      echo '</ul></div>' . "\n";
    } else {
      echo '</div>';
    }
 
  }

//Post Types
function custom_post_portfolio() {
  $labels = array(
    'name'               => _x( 'Properties', 'post type general name' ),
    'singular_name'      => _x( 'Property', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Property' ),
    'edit_item'          => __( 'Edit Property' ),
    'new_item'           => __( 'New Property' ),
    'all_items'          => __( 'All Properties' ),
    'view_item'          => __( 'View Properties' ),
    'search_items'       => __( 'Search Properties' ),
    'not_found'          => __( 'No properties found' ),
    'not_found_in_trash' => __( 'No properties found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Portfolio'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our properties',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'thumbnail' ),
    'has_archive'   => 'portfolio',
    'publicly_queryable' => true,
  );
  register_post_type( 'portfolio', $args ); 
}
add_action( 'init', 'custom_post_portfolio' );


// .current-menu-item doesnt get added to a menu item if its custom post type.  this fixes it.
function add_current_nav_class($classes, $item) {
  // Getting the current post details
  global $post;
  // Getting the post type of the current post
  $current_post_type = get_post_type_object(get_post_type($post->ID));
  $current_post_type_slug = $current_post_type->rewrite[slug];
  // Getting the URL of the menu item
  $menu_slug = strtolower(trim($item->url));
  // If the menu item URL contains the current post types slug add the current-menu-item class
  if (strpos($menu_slug,$current_post_type_slug) !== false) {
     $classes[] = 'current-menu-item';
  }
  // Return the corrected set of classes to be added to the menu item
  return $classes;
}
add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );


function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


//Changes the writing styles available in WYSIWYG
function custom_wys_styles($arr){
    $arr['block_formats'] = 'Paragraph=p;Subheading=h3';
    return $arr;
  }
add_filter('tiny_mce_before_init', 'custom_wys_styles');






//Login image
function rwd_login_logo() {
  echo '<style type="text/css">
    h1 a {
      background-image: url(' . get_template_directory_uri() . '/_/img/logos/header-logo-small.png) !important;
    }
  </style>';
}
add_action('login_head', 'rwd_login_logo');

add_editor_style();

//Login page title
function rwd_login_logo_url_title() {
    return 'RWD Login';
}
add_filter( 'login_headertitle', 'rwd_login_logo_url_title' );





