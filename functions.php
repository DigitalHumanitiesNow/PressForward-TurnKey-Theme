  <?php

add_action( 'wp_print_styles', 'my_deregister_styles', 100 );

function my_deregister_styles() {
 	wp_deregister_style( 'bones-stylesheet' );
 }
function ls_scripts() {
		wp_enqueue_style('brew-child-css', get_stylesheet_directory_uri() . '/library/css/style.css');
		wp_enqueue_style('ls-css', get_stylesheet_directory_uri() . '/library/css/liquid-slider.css');
		wp_enqueue_style('brew-child-css', get_stylesheet_directory_uri() . '/library/css/style.css');
    wp_enqueue_style('sidr-css', get_stylesheet_directory_uri() . '/library/stylesheets/jquery.sidr.light.css');
		wp_enqueue_script( 'jquery-easing', get_stylesheet_directory_uri() . 
			'/library/js/jquery.easing.1.3.js', array('jquery'));
		wp_enqueue_script( 'jquery-touchSwipe', get_stylesheet_directory_uri() . '/library/js/jquery.touchSwipe.min.js', array('jquery-easing'));
		wp_enqueue_script( 'jquery-ls', get_stylesheet_directory_uri() . '/library/js/jquery.liquid-slider.min.js', array('jquery-touchSwipe'));
		wp_enqueue_script( 'childjs', get_stylesheet_directory_uri() . '/library/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script( 'sidr', get_stylesheet_directory_uri() . '/library/jquery.sidr.js');
}
add_action('wp_enqueue_scripts', 'ls_scripts');

//REDUX FRAMEWORK


function add_another_section_bl($sections){
    $sections = array();
    $sections[] = array(
        'icon' => 'fa fa-beer',
        'title' => __('General Settings', 'brew-framework'),
        'fields' => array (
          array (
            'id'=>'tracking-code',
            'type' => 'textarea',
            //'required' => array('layout','equals','1'), 
            'title' => __('Tracking Code', 'brew-framework'), 
            'subtitle' => __('Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.', 'brew-framework'),
            'validate' => 'js',
            'desc' => 'Validate that it\'s javascript!',
          ),
        ),
      );
      $sections[] = array(
        'icon' => 'fa fa-beer',
        'title' => __('Colors', 'brew-framework'),
        'fields' => array (
          array (
            'id'        => 'participate-opt-color',
            'type'      => 'color',
            'title'     => __('Participate Background Color', 'brew-framework'),
            'subtitle'  => __('Pick a background color.', 'brew-framework'),
            'output'    => array('background-color' => '.participatehome')
            ),
                  array (
            'id'        => 'categories-opt-color',
            'type'      => 'color',
            'title'     => __('Categories Background Color', 'brew-framework'),
            'subtitle'  => __('Pick a background color.', 'brew-framework'),
            'output'    => array('background-color' => '.categorieshome')
            ),
        ),
      );
    $sections[] = array(
        'icon' => 'fa fa-beer',
        'title' => __('Homepage Icons', 'brew-framework'),
        'fields' => array (
           array (
            'id'       => 'cat1',
            'type'     => 'text',
            'title'    => __('Block 2 Column 1 Icon', 'brew-framework'),
            'subtitle' => __('Category 1 id', 'brew-framework'),
            'desc'     => __('This is the description field, again good for additional info.', 'brew-framework')
            ),
           array (
            'id'       => 'opt-select',
            'type'     => 'select',
            'title'    => __('Select Option', 'redux-framework-demo'), 
            'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
            'desc'     => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
            // Must provide key => value pairs for select options
            'data' => _('categories')
            ),
         array (
            'id'       => 'b2-c1-icon',
            'type'     => 'text',
            'title'    => __('Block 2 Column 1 Icon', 'brew-framework'),
            'subtitle' => __('Icon for Block 2 Content Area 1', 'brew-framework'),
            'desc'     => __('This is the description field, again good for additional info.', 'brew-framework')
            ),
             array (
            'id'       => 'b2-c2-icon',
            'type'     => 'text',
            'title'    => __('Block 2 Column 2 Icon', 'brew-framework'),
            'subtitle' => __('Icon for Block 2 Content Area 2', 'brew-framework'),
            'desc'     => __('This is the description field, again good for additional info.', 'brew-framework')
            ),
             array (
            'id'       => 'b2-c3-icon',
            'type'     => 'text',
            'title'    => __('Block 2 Column 3 Icon', 'brew-framework'),
            'subtitle' => __('Icon for Block 2 Content Area 3', 'brew-framework'),
            'desc'     => __('This is the description field, again good for additional info.', 'brew-framework')
            ),
            array (
            'id'       => 'b2-c4-icon',
            'type'     => 'text',
            'title'    => __('Block 2 Column 4 Icon', 'brew-framework'),
            'subtitle' => __('Icon for Block 2 Content Area 4', 'brew-framework'),
            'desc'     => __('This is the description field, again good for additional info.', 'brew-framework')
            ),
            array (
            'id'       => 'b3-c1-icon',
            'type'     => 'text',
            'title'    => __('Content Area 1 Icon', 'brew-framework'),
            'subtitle' => __('Icon for Content Area 1', 'brew-framework'),
            'desc'     => __('This is the description field, again good for additional info.', 'brew-framework')
            ),
            array (
            'id'       => 'b3-c2-icon',
            'type'     => 'text',
            'title'    => __('Content Area 2 Icon', 'brew-framework'),
            'subtitle' => __('Icon for Content Area 2', 'brew-framework'),
            'desc'     => __('This is the description field, again good for additional info.', 'brew-framework')
            ),
            array (
            'id'       => 'b3-c3-icon',
            'type'     => 'text',
            'title'    => __('Content Area 3 Icon', 'brew-framework'),
            'subtitle' => __('Icon for Content Area 3', 'brew-framework'),
            'desc'     => __('This is the description field, again good for additional info.', 'brew-framework')
            ),
             array (
            'id'       => 'b3-c4-icon',
            'type'     => 'text',
            'title'    => __('Content Area 4 Icon', 'brew-framework'),
            'subtitle' => __('Icon for Content Area 4', 'brew-framework'),
            'desc'     => __('This is the description field, again good for additional info.', 'brew-framework')
            ),
              array (
            'id'       => 'b3-c5-icon',
            'type'     => 'text',
            'title'    => __('Content Area 5 Icon', 'brew-framework'),
            'subtitle' => __('Icon for Content Area 5', 'brew-framework'),
            'desc'     => __('This is the description field, again good for additional info.', 'brew-framework')
            ),
               array (
            'id'       => 'b3-c6-icon',
            'type'     => 'text',
            'title'    => __('Content Area 6 Icon', 'brew-framework'),
            'subtitle' => __('Icon for Content Area 6', 'brew-framework'),
            'desc'     => __('This is the description field, again good for additional info.', 'brew-framework')
            ),
        ),
      );

    $sections[] = array(
        'title' => __('General Layout Settings', 'Redux_Framework_sample_config'),
        'desc' => __('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'Redux_Framework_sample_config'),
        // Redux ships with the glyphicons free icon pack, included in the options folder.
        // Feel free to use them, add your own icons, or leave this blank for the default.
        // 'icon' => trailingslashit(get_template_directory_uri()) . 'options/img/icons/glyphicons_062_attach.png',
        'icon' => 'fa fa-bell-o',
        // Leave this as a blank section, no options just some intro text set above.
        'fields' => array (
          array (
            'id' => 'breadcrumb',
            'type' => 'switch',
            'title' => __('Breadcrumbs', 'brew-framework'),
            'desc' => __('Turn breadcrumbs on or off (site-wide)', 'brew-framework'),
            'default' => 1,
          ),
          array (           
            'id' => 'author_profile',
            'type' => 'switch',
            'title' => __('Author Profiles', 'brew-framework'),
            'desc' => 'Display an author profile after a post',
            'default' => 1,
          ),
        array (
             'id'        => 'logo_uploader',
             'type'      => 'media',
             'url'       => true,
            'title'     => __('Logo Uploader'),
            'compiler'  => 'true',
            'desc'      => __('Basic media uploader with disabled URL input field.', 'brew-framework'),
              'subtitle'  => __('Upload any media using the WordPress native uploader', 'brew-framework'),
             'default'   => array('url' => 'http://s.wordpress.org/style/images/codeispoetry.png'),             
             ),                   
        ),
    );

    return $sections;
}
add_filter("redux/options/brew_options/sections", 'add_another_section_bl');

//This removes all the actions from the bones_ahoy function and then readds all of them EXCEPT for the excerpt_more. Instead this function removes the 'bones_excerpt_more' function.  Child_bones_excerpt_more re-adds the read more ellipses.
// function remove_ahoy_actions() {
//   remove_action('after_setup_theme', 'bones_ahoy', 16);
//     add_action( 'init', 'bones_head_cleanup' );
//     // remove WP version from RSS
//     add_filter( 'the_generator', 'bones_rss_version' );
//     // remove pesky injected css for recent comments widget
//     add_filter( 'wp_head', 'bones_remove_wp_widget_recent_comments_style', 1 );
//     // clean up comment styles in the head
//     add_action( 'wp_head', 'bones_remove_recent_comments_style', 1 );
//     // clean up gallery output in wp
//     add_filter( 'gallery_style', 'bones_gallery_style' );

//     // enqueue base scripts and styles
//     add_action( 'wp_enqueue_scripts', 'bones_scripts_and_styles', 999 );
//     // ie conditional wrapper

//     // launching this stuff after theme setup
//     bones_theme_support();

//     // adding sidebars to Wordpress (these are created in functions.php)
//     add_action( 'widgets_init', 'bones_register_sidebars' );
//     // adding the bones search form (created in functions.php)
//     // add_filter( 'get_search_form', 'bones_wpsearch' );

//     // cleaning up random code around images
//     add_filter( 'the_content', 'bones_filter_ptags_on_images' );
//     remove_filter('excerpt_more', 'bones_excerpt_more');
    
// }
// add_action('after_setup_theme', 'remove_ahoy_actions');
// <!-- SHORTCODES -->

function active_feeds_function($atts) {
  extract(shortcode_atts(array(
      'status' => 'publish',
    ), $atts));


  $return_string = '<ul class="feedlist">';
  query_posts(array('post_type' => pressforward()->pf_feeds->post_type, 'post_status' => 
    $status, 'nopaging' => true, 'orderby' => 'title', 'order' => 'ASC'));

  if (have_posts()) :
    while (have_posts())  : the_post();
      $return_string .= '<li class="feeditem"><a href="'.get_post_meta(get_the_ID(), 'feedUrl', true).'"target="_blank">'.get_the_title().'</a></li>'; 
    endwhile;
  endif;
  $return_string .= '</ul>';
wp_reset_query();
return $return_string;      
}
function register_shortcodes() {
  add_shortcode('feeds', 'active_feeds_function');
}
add_action('init', 'register_shortcodes');


function child_bones_excerpt_more($more) {
  global $post;
  // edit here if you like
  return '... </p>';
}
add_filter( 'excerpt_more', 'child_bones_excerpt_more');

add_image_size( 'brew-child-thumbnail', 200, 200, true );  

  register_sidebar(array(
    'id' => 'content1',
    'name' => __( 'Content Widget 1', 'bonestheme' ),
    'description' => __( 'The first content area widget.', 'bonestheme' ),
        'before_widget' => '<div class="homeinnercontent">',
    'after_widget' => '</div>',
    'before_title' => '<h1>',
    'after_title' => '</h1>',
  ));

   register_sidebar(array(
    'id' => 'content2',
    'name' => __( 'Content Widget 2', 'bonestheme' ),
    'description' => __( 'The second content area widget.', 'bonestheme' ),
        'before_widget' => '<div class="homeinnercontent">',
    'after_widget' => '</div>',
    'before_title' => '<h1>',
    'after_title' => '</h1>',
  ));

   register_sidebar(array(
    'id' => 'content3',
    'name' => __( 'Content Widget 3', 'bonestheme' ),
    'description' => __( 'The third content area widget.', 'bonestheme' ),
    'before_widget' => '<div class="homeinnercontent">',
    'after_widget' => '</div>',
    'before_title' => '<h1>',
    'after_title' => '</h1>',
  ));

    register_sidebar(array(
    'id' => 'content4',
    'name' => __( 'Content Widget 4', 'bonestheme' ),
    'description' => __( 'The fourth content area widget.', 'bonestheme' ),
    'before_widget' => '<div class="homeinnercontent">',
    'after_widget' => '</div>',
     'before_title' => '<h1>',
    'after_title' => '</h1>',
  ));

     register_sidebar(array(
    'id' => 'content5',
    'name' => __( 'Content Widget 5', 'bonestheme' ),
    'description' => __( 'The fifth content area widget.', 'bonestheme' ),
    'before_widget' => '<div class="homeinnercontent">',
    'after_widget' => '</div>',
    'before_title' => '<h1>',
    'after_title' => '</h1>',
  ));

      register_sidebar(array(
    'id' => 'content6',
    'name' => __( 'Content Widget 6', 'bonestheme' ),
    'description' => __( 'The sixth content area widget.', 'bonestheme' ),
    'before_widget' => '<div class="homeinnercontent">',
    'after_widget' => '</div>',
    'before_title' => '<h1>',
    'after_title' => '</h1>',
  ));

       register_sidebar(array(
    'id' => 'homepageabout',
    'name' => __( 'About Section Widget', 'bonestheme' ),
    'description' => __( 'The homepage about widget.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget infowidget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h1 class="widgettitle">',
    'after_title' => '</h1>',
  ));

    register_sidebar(array(
    'id' => 'participate1',
    'name' => __( 'Partcipate Block 1 Widget', 'bonestheme' ),
    'description' => __( 'The first participate block widget.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget participatewidget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h1 class="widgettitle">',
    'after_title' => '</h1>',
  ));

         register_sidebar(array(
    'id' => 'participate2',
    'name' => __( 'Partcipate Block 2 Widget', 'bonestheme' ),
    'description' => __( 'The second participate block widget.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget participatewidget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h1 class="widgettitle">',
    'after_title' => '</h1>',
  ));

           register_sidebar(array(
    'id' => 'participate3',
    'name' => __( 'Partcipate Block 3 Widget', 'bonestheme' ),
    'description' => __( 'The third participate block widget.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget participatewidget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h1 class="widgettitle">',
    'after_title' => '</h1>',
  ));

             register_sidebar(array(
    'id' => 'participate4',
    'name' => __( 'Partcipate Block 4 Widget', 'bonestheme' ),
    'description' => __( 'The fourth participate block widget.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget participatewidget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h1 class="widgettitle">',
    'after_title' => '</h1>',
  ));

             register_sidebar(array(
    'id' => 'blogexcerpt',
    'name' => __( 'Blog Widget 1', 'bonestheme' ),
    'description' => __( 'The blog widget.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget blogwidget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h1 class="widgettitle">',
    'after_title' => '</h1>',
  ));
             register_sidebar(array(
    'id' => 'bloglist',
    'name' => __( 'Blog Widget 2', 'bonestheme' ),
    'description' => __( 'The blog widget.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget blogwidget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h1 class="widgettitle">',
    'after_title' => '</h1>',
  ));

?>
<?php
//OPEN GRAPH METADATA
function add_opengraph_markup() {
  if (is_single()) {
    global $post;
    global $brew_options ;
    // $themelogo = $brew_options['logo_uploader']['url'];
    if(get_the_post_thumbnail($post->ID, 'thumbnail')) {
      $thumbnail_id = get_post_thumbnail_id($post->ID);
      $thumbnail_object = get_post($thumbnail_id);
      $image = $thumbnail_object->guid;
    } else {
      // set default image
      $image =  $brew_options['logo_uploader']['url'];
    }
    //$description = get_bloginfo('description');
    $description = substr(strip_tags($post->post_content),0,200) . '...';
?>
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?=$image?>" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:description" content="<?=$description?>" />
<meta property="og:site_name" content="<?=get_bloginfo('name')?>" />
 
<?php
  }
}
add_action('wp_head', 'add_opengraph_markup');







require_once( 'library/navwalker.php' ); // needed for bootstrap navigation


// REDUX.  Needed for custom admin panel
// https://github.com/ReduxFramework/ReduxFramework
// WIP

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/library/admin/ReduxCore/framework.php' ) ) {
  require_once( dirname( __FILE__ ) . '/library/admin/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/library/option-config.php' ) ) {
  require_once( dirname( __FILE__ ) . '/library/option-config.php' );
}


// Custom metaboxes and fields
// https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );
function be_initialize_cmb_meta_boxes() {
  if ( !class_exists( 'cmb_Meta_Box' ) ) {
    require_once( 'library/metabox/init.php' );
  }
}


/* library/bones.php (functions specific to BREW)
  - navwalker
  - Redux framework
  - Read more > Bootstrap button
  - Bootstrap style pagination
  - Bootstrap style breadcrumbs
*/
require_once( 'library/brew.php' ); // if you remove this, BREW will break
/*
1. library/bones.php
  - head cleanup (remove rsd, uri links, junk css, ect)
  - enqueueing scripts & styles
  - theme support functions
  - custom menu output & fallbacks
  - related post function
  - page-navi function
  - removing <p> from around images
  - customizing the post excerpt
  - custom google+ integration
  - adding custom fields to user profiles
*/
require_once( 'library/bones.php' ); // if you remove this, bones will break
/*
2. library/custom-post-type.php
  - an example custom post type
  - example custom taxonomy (like categories)
  - example custom taxonomy (like tags)
*/
require_once( 'library/custom-post-type.php' ); // you can disable this if you like
/*
3. library/admin.php
  - removing some default WordPress dashboard widgets
  - an example custom dashboard widget
  - adding custom login css
  - changing text in footer of admin
*/
// require_once( 'library/admin.php' ); // this comes turned off by default
/*
4. library/translation/translation.php
  - adding support for other languages
*/
// require_once( 'library/translation/translation.php' ); // this comes turned off by default

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-300', 300, 100, true );
add_image_size( 'post-featured', 750, 300, true );
/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
  register_sidebar(array(
    'id' => 'sidebar1',
    'name' => __( 'Sidebar 1', 'bonestheme' ),
    'description' => __( 'The first (primary) sidebar.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));


// add footer widgets

  register_sidebar(array(
    'id' => 'footer-1',
    'name' => __( 'Footer Widget 1', 'bonestheme' ),
    'description' => __( 'The first footer widget.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget widgetFooter %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));

  register_sidebar(array(
    'id' => 'footer-2',
    'name' => __( 'Footer Widget 2', 'bonestheme' ),
    'description' => __( 'The second footer widget.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget widgetFooter %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));

  register_sidebar(array(
    'id' => 'footer-3',
    'name' => __( 'Footer Widget 3', 'bonestheme' ),
    'description' => __( 'The third footer widget.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget widgetFooter %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));

    register_sidebar(array(
    'id' => 'footer-4',
    'name' => __( 'Footer Widget 4', 'bonestheme' ),
    'description' => __( 'The fourth footer widget.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget widgetFooter %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));

  /*
  to add more sidebars or widgetized areas, just copy
  and edit the above sidebar code. In order to call
  your new sidebar just use the following code:

  Just change the name to whatever your new
  sidebar's id is, for example:

  register_sidebar(array(
    'id' => 'sidebar2',
    'name' => __( 'Sidebar 2', 'bonestheme' ),
    'description' => __( 'The second (secondary) sidebar.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));

  To call the sidebar in your template, you can just copy
  the sidebar.php file and rename it to your sidebar's name.
  So using the above example, it would be:
  sidebar-sidebar2.php

  */
} // don't remove this bracket!





/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments( $comment, $args, $depth ) {
   $GLOBALS['comment'] = $comment; ?>
  <li <?php comment_class(); ?>>
    <article id="comment-<?php comment_ID(); ?>" class="clearfix comment-container">
      <div class="comment-author vcard">
        <?php
        /*
          this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
          echo get_avatar($comment,$size='32',$default='<path_to_url>' );
        */
        ?>
        <?php // custom gravatar call ?>
        <?php
          // create variable
          $bgauthemail = get_comment_author_email();
        ?>
        <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=64" class="load-gravatar avatar avatar-48 photo" height="64" width="64" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
        <?php // end custom gravatar call ?>
      </div>
      <div class="comment-content">
        <?php printf(__( '<cite class="fn">%s</cite>', 'bonestheme' ), get_comment_author_link()) ?>
        <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'bonestheme' )); ?> </a></time>
        <?php edit_comment_link(__( '(Edit)', 'bonestheme' ),'  ','') ?>
        <?php if ($comment->comment_approved == '0') : ?>
          <div class="alert alert-info">
            <p><?php _e( 'Your comment is awaiting moderation.', 'bonestheme' ) ?></p>
          </div>
        <?php endif; ?>
        <section class="comment_content clearfix">
          <?php comment_text() ?>
        </section>
        <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div> <!-- END comment-content -->
    </article>
  <?php // </li> is added by WordPress automatically ?>
<?php
} // don't remove this bracket!

/*************** PINGS LAYOUT **************/

function list_pings( $comment, $args, $depth ) {
  $GLOBALS['comment'] = $comment; ?>
  <li id="comment-<?php comment_ID(); ?>">
    <span class="pingcontent">
      <?php printf(__('<cite class="fn">%s</cite> <span class="says"></span>'), get_comment_author_link()) ?>
      <?php comment_text(); ?>
    </span>
  </li>
<?php } // end list_pings
?>










?>










