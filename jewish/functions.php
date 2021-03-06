<?php
/**
 * jewish functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jewish
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'jewish_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jewish_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on jewish, use a find and replace
		 * to change 'jewish' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'jewish', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'jewish' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'jewish_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'jewish_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jewish_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jewish_content_width', 640 );
}
add_action( 'after_setup_theme', 'jewish_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jewish_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'jewish' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'jewish' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'jewish_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jewish_scripts() {
	wp_enqueue_style( 'jewish-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'jewish-style', 'rtl', 'replace' );

  wp_enqueue_style( 'jewish-main-style', get_template_directory_uri() . '/resources/css/style.css', array('jewish-style'), _S_VERSION );

  wp_enqueue_script( 'jewish-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jewish_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Menus
 */

register_nav_menus(
  array(
    'footer' => esc_html__( 'footer', 'jewish' ),
  )
);
register_nav_menus(
  array(
    'social' => esc_html__( 'social', 'jewish' ),
  )
);

/**
 * Breadcrums
 */

function dimox_breadcrumbs() {

  /* === ?????????? === */
  $text['home']     = 'Home'; // ?????????? ???????????? "??????????????"
  $text['category'] = '%s'; // ?????????? ?????? ???????????????? ??????????????
  $text['search']   = 'Search result for "%s"'; // ?????????? ?????? ???????????????? ?? ???????????????????????? ????????????
  $text['tag']      = 'Posts with tag "%s"'; // ?????????? ?????? ???????????????? ????????
  $text['author']   = 'Articles %s'; // ?????????? ?????? ???????????????? ????????????
  $text['404']      = 'Error 404'; // ?????????? ?????? ???????????????? 404
  $text['page']     = 'Page %s'; // ?????????? '???????????????? N'
  $text['cpage']    = 'Page comments %s'; // ?????????? '???????????????? ???????????????????????? N'

  $wrap_before    = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // ?????????????????????? ?????? ??????????????
  $wrap_after     = '</div><!-- .breadcrumbs -->'; // ?????????????????????? ?????? ??????????????
  $sep            = '<span class="breadcrumbs__separator"> ??? </span>'; // ?????????????????????? ?????????? "????????????????"
  $before         = '<span class="breadcrumbs__current">'; // ?????? ?????????? ?????????????? "??????????????"
  $after          = '</span>'; // ?????? ?????????? ?????????????? "????????????"

  $show_on_home   = 0; // 1 - ???????????????????? "?????????????? ????????????" ???? ?????????????? ????????????????, 0 - ???? ????????????????????
  $show_home_link = 1; // 1 - ???????????????????? ???????????? "??????????????", 0 - ???? ????????????????????
  $show_current   = 1; // 1 - ???????????????????? ???????????????? ?????????????? ????????????????, 0 - ???? ????????????????????
  $show_last_sep  = 1; // 1 - ???????????????????? ?????????????????? ??????????????????????, ?????????? ???????????????? ?????????????? ???????????????? ???? ????????????????????????, 0 - ???? ????????????????????
  /* === ?????????? ?????????? === */

  global $post;
  $home_url       = home_url('/');
  $link           = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
  $link          .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
  $link          .= '<meta itemprop="position" content="%3$s" />';
  $link          .= '</span>';
  $parent_id      = ( $post ) ? $post->post_parent : '';
  $home_link      = sprintf( $link, $home_url, $text['home'], 1 );

  if ( is_home() || is_front_page() ) {

    if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

  } else {

    $position = 0;

    echo $wrap_before;

    if ( $show_home_link ) {
      $position += 1;
      echo $home_link;
    }

    if ( is_category() ) {
      $parents = get_ancestors( get_query_var('cat'), 'category' );
      foreach ( array_reverse( $parents ) as $cat ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
      }
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        $cat = get_query_var('cat');
        echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_current ) {
          if ( $position >= 1 ) echo $sep;
          echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
        } elseif ( $show_last_sep ) echo $sep;
      }

    } elseif ( is_search() ) {
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        if ( $show_home_link ) echo $sep;
        echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_current ) {
          if ( $position >= 1 ) echo $sep;
          echo $before . sprintf( $text['search'], get_search_query() ) . $after;
        } elseif ( $show_last_sep ) echo $sep;
      }

    } elseif ( is_year() ) {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . get_the_time('Y') . $after;
      elseif ( $show_home_link && $show_last_sep ) echo $sep;

    } elseif ( is_month() ) {
      if ( $show_home_link ) echo $sep;
      $position += 1;
      echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
      if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_day() ) {
      if ( $show_home_link ) echo $sep;
      $position += 1;
      echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
      $position += 1;
      echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
      if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_single() && ! is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $position += 1;
        $post_type = get_post_type_object( get_post_type() );
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
        if ( $show_current ) echo $sep . $before . get_the_title() . $after;
        elseif ( $show_last_sep ) echo $sep;
      } else {
        $cat = get_the_category(); $catID = $cat[0]->cat_ID;
        $parents = get_ancestors( $catID, 'category' );
        $parents = array_reverse( $parents );
        $parents[] = $catID;
        foreach ( $parents as $cat ) {
          $position += 1;
          if ( $position > 1 ) echo $sep;
          echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
        }
        if ( get_query_var( 'cpage' ) ) {
          $position += 1;
          echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
          echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
        } else {
          if ( $show_current ) echo $sep . $before . get_the_title() . $after;
          elseif ( $show_last_sep ) echo $sep;
        }
      }

    } elseif ( is_post_type_archive() ) {
      $post_type = get_post_type_object( get_post_type() );
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . $post_type->label . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;
      }

    } elseif ( is_attachment() ) {
      $parent = get_post( $parent_id );
      $cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
      $parents = get_ancestors( $catID, 'category' );
      $parents = array_reverse( $parents );
      $parents[] = $catID;
      foreach ( $parents as $cat ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
      }
      $position += 1;
      echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
      if ( $show_current ) echo $sep . $before . get_the_title() . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_page() && ! $parent_id ) {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . get_the_title() . $after;
      elseif ( $show_home_link && $show_last_sep ) echo $sep;

    } elseif ( is_page() && $parent_id ) {
      $parents = get_post_ancestors( get_the_ID() );
      foreach ( array_reverse( $parents ) as $pageID ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
      }
      if ( $show_current ) echo $sep . $before . get_the_title() . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_tag() ) {
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        $tagID = get_query_var( 'tag_id' );
        echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;
      }

    } elseif ( is_author() ) {
      $author = get_userdata( get_query_var( 'author' ) );
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;
      }

    } elseif ( is_404() ) {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . $text['404'] . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( has_post_format() && ! is_singular() ) {
      if ( $show_home_link && $show_current ) echo $sep;
      echo get_post_format_string( get_post_format() );
    }

    echo $wrap_after;

  }
} // end of dimox_breadcrumbs()


/**
 * Body Class
 */

add_filter('body_class','delete_classes');
function delete_classes($classes) {
  return array();
}

add_filter('body_class','top_level_parent_id_body_class');
function top_level_parent_id_body_class($classes) {
  global $wpdb, $post;
  if (is_page()) {
    if ($post->post_parent)  {
      $ancestors=get_post_ancestors($post->ID);
      $root=count($ancestors)-2;
      $parent = $ancestors[$root];
    } else {
      $parent = $post->ID;
    }
    $classes[] = 'pageid-' . $parent;
  }
  return $classes;
}

/**
 * Page Description
 */

add_post_type_support( 'page', array('excerpt') );


/**
 * Widget
 */

register_sidebar(array(
  'name' => 'Footer',
  'id' => 'footer-1',
  'description' => 'Address Area',
  'before_widget' => '<div class="address">',
  'after_widget' => '</div>',
  'before_title' => '<p>',
  'after_title' => '</p>',
));

/**
 * Widget Tour
 */

register_sidebar(array(
  'name' => 'Tours',
  'id' => 'tours',
  'description' => 'Recent Tours',
  'before_widget' => '<div class="tours_widget">',
  'after_widget' => '</div>',
  'before_title' => '<p>',
  'after_title' => '</p>',
));

/**
 * Widget Title
 */
function prefix_filter_widget_title_tag( $params ) {

  $params[0]['before_title'] = '<h3>' ;

  $params[0]['after_title']  = '</h3>' ;

  return $params;

}
add_filter( 'dynamic_sidebar_params' , 'prefix_filter_widget_title_tag' );





add_action( 'init', 'cptui_register_my_cpts_tours' );

add_filter('template_include', 'main_template');
function main_template( $template ) {
  if( is_page(get_the_ID()) ){
    if ( $new_template = locate_template( array( 'page.php' ) ) )
      return $new_template ;
  }

  return $template;
}


/**
 * Tours Page
 */

add_filter('template_include', 'tours_template');
function tours_template( $template ) {

  if( is_page('8') ){
    if ( $new_template = locate_template( array( 'template-parts/content_tours.php' ) ) )
      return $new_template ;
  }

  return $template;
}


/**
 * Thumb for Tours
 */

function wpse_get_images() {
  global $post;
  $postID = get_the_ID();
  $id = intval( $post->ID );
  $size = 'medium';
  $attachments = get_children( array(
    'post_parent' => $id,
    'post_status' => 'inherit',
    'post_type' => 'attachment',
    'post_mime_type' => 'image',
    'order' => 'ASC',
    'orderby' => 'menu_order'
  ) );
  if ( empty( $attachments ) )
    return '';

  $output = "\n";
  /**
   * Loop through each attachment
   */

  foreach ( $attachments as $id  => $attachment ) :

    $id_image = get_the_ID();
    $title = esc_html( $attachment->post_title, 1 );
    $img = wp_get_attachment_image_src( $id, $size );

    $output .= '<a class="lightbox_thumb" data-lightbox="' . $id_image .  '" href="' . esc_url( wp_get_attachment_url( $id ) )
      . '" title="' . esc_attr(
      $title ) . '">';
    $output .= '<img class="aligncenter" src="' . esc_url( $img[0] ) . '" alt="' . esc_attr( $title ) . '" title="' . esc_attr( $title ) . '" />';
    $output .= '</a>';

  endforeach;

  return $output;
}


/**
 * Home Page
 */

add_filter('template_include', 'home_template');
function home_template( $template ) {

  if( is_front_page() ){
    if ( $new_template = locate_template( array( 'template-parts/content-home.php' ) ) )
      return $new_template ;
  }

  return $template;
}


/**
 * Tours Register
 */


function cptui_register_my_cpts_tours() {

  /**
   * Post Type: Tours.
   */

  $labels = [
    "name" => __( "Tours", "jewish" ),
    "singular_name" => __( "Tours", "jewish" ),
  ];

  $args = [
    "label" => __( "Tours", "jewish" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => [ "slug" => "tours", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "page-attributes", "post-formats" ],
    "taxonomies" => [ "category", "post_tag" ],
  ];

  register_post_type( "tours", $args );
}
