<?php
/* WIDGETS */
//TN Disable WordPress Version from your website
function tn_disable_wp_version() {
return '';
}
add_filter ( 'the_generator' ,  'tn_disable_wp_version' );
//SUPORTE PARA FEATURED IMAGES
add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
//DEFINIÇÃO DO TAMANHO DA IMAGEM
set_post_thumbnail_size(100, 75, true);
//SUPORTE PARA THEMES FORMAT
add_theme_support( 'post-formats', array( 'aside', 'gallery','status','video') );
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
		'name'			=> 'Sidebar',
        'before_widget'	=> '<div class="widget">',
        'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',
    ));
}



// PAGINAÇÃO
function wordpress_pagination() {
            global $wp_query;
            $big = 999999999;
            echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $wp_query->max_num_pages
            ) );
}


/*
add_action( 'init', 'create_post_type' );

function create_post_type() {
  register_post_type( 'Representantes',
    array(
      'labels' => array(
        'name' => __( 'Representantes' ),
        'singular_name' => __( 'representantes-lombard' ),

      ),
    'public' => true,
    'has_archive' => true,'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    )
  );
}


add_filter('admin_title', 'my_admin_title', 10, 2);

function my_admin_title($admin_title, $title)
{
    return get_bloginfo('name').' &bull; '.$title;
}
*/


function wp_get_menu_array($current_menu) {
 
    $array_menu = wp_get_nav_menu_items($current_menu);
    $menu = array();

    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
           
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID']      =   $m->ID;
            $menu[$m->ID]['title']       =   $m->title;
            $menu[$m->ID]['url']         =   $m->url;
            $menu[$m->ID]['children']    =   array();
        }
        

    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
            $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID']       =   $m->ID;
            $submenu[$m->ID]['title']    =   $m->title;
            $submenu[$m->ID]['url']  =   $m->url;
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
        }
    }
    return $menu;
     
}


function mytheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );




function get_post_primary_category($post_id, $term='category', $return_all_categories=false){
    $return = array();

    if (class_exists('WPSEO_Primary_Term')){
        // Show Primary category by Yoast if it is enabled & set
        $wpseo_primary_term = new WPSEO_Primary_Term( $term, $post_id );
        $primary_term = get_term($wpseo_primary_term->get_primary_term());

        if (!is_wp_error($primary_term)){
            $return['primary_category'] = $primary_term;
        }
    }

    if (empty($return['primary_category']) || $return_all_categories){
        $categories_list = get_the_terms($post_id, $term);

        if (empty($return['primary_category']) && !empty($categories_list)){
            $return['primary_category'] = $categories_list[0];  //get the first category
        }
        if ($return_all_categories){
            $return['all_categories'] = array();

            if (!empty($categories_list)){
                foreach($categories_list as &$category){
                    $return['all_categories'][] = $category->term_id;
                }
            }
        }
    }

    return $return;
}


function get_post_primary_categoryMT($post_id, $term='categoria-materiais', $return_all_categories=false){
    $return = array();

    if (class_exists('WPSEO_Primary_Term')){
        // Show Primary category by Yoast if it is enabled & set
        $wpseo_primary_term = new WPSEO_Primary_Term( $term, $post_id );
        $primary_term = get_term($wpseo_primary_term->get_primary_term());

        if (!is_wp_error($primary_term)){
            $return['primary_category'] = $primary_term;
        }
    }

    if (empty($return['primary_category']) || $return_all_categories){
        $categories_list = get_the_terms($post_id, $term);

        if (empty($return['primary_category']) && !empty($categories_list)){
            $return['primary_category'] = $categories_list[0];  //get the first category
        }
        if ($return_all_categories){
            $return['all_categories'] = array();

            if (!empty($categories_list)){
                foreach($categories_list as &$category){
                    $return['all_categories'][] = $category->term_id;
                }
            }
        }
    }

    return $return;
}





?>
