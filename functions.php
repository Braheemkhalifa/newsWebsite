<?php 

// register nav walker
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    
}

//theme support
function wp_theme_setup(){
add_theme_support('post-thumbnails');
register_nav_menus( array(
    'primary' => __( 'Primary Menu' ),
    'footer' => __( 'Footer Menu' )
) );
}

add_action( 'after_setup_theme', 'register_navwalker' );
add_action( 'after_setup_theme','wp_theme_setup');


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 45;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



// widget location
function wp_init_widgets($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar-module" data-aos="fade-left">',
        'after_widget' => '</div>',
        'before_title' => '<h4> <span>',
        'after_title' => '</h4> </span>',
    ));
}

add_action( 'widgets_init', 'wp_init_widgets' );



// Numbered Pagination
if ( !function_exists( 'wpex_pagination' ) ) {
	
	function wpex_pagination() {
		
		$prev_arrow = is_rtl() ? 'السابق' : 'previous'  ;
		$next_arrow = is_rtl() ? 'التالى' : 'next';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}
	
}

/**
 * Add feature selection to edit post
 */

 function m_custom_meta() {
    add_meta_box( 'sm_meta', __( 'Featured Posts', 'sm-textdomain' ), 'sm_meta_callback', 'post' );
    add_meta_box( 'mm_meta', __( 'Main Posts', 'sm-textdomain' ), 'mm_meta_callback', 'post' );

}

// featured Posts
function sm_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID );
    ?>
 
	<p>
        <div class="sm-row-content ">
            <label class="bg-dark" for="meta-checkbox">
                <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="featured" 
                <?php if ( isset ( $featured['meta-checkbox'] ) )
                 checked( $featured['meta-checkbox'][0], 'featured' ); ?> />
                <?php _e( 'Featured this post', 'sm-textdomain' )?>
            </label>
            
        </div>
    </p>
 
    <?php
}

// main Posts
function mm_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID );
    ?>
 
	<p>
        <div class="sm-row-content">
            <label for="main-checkbox">
                <input type="checkbox" name="main-checkbox" id="main-checkbox" value="main" 
                <?php if ( isset ( $featured['main-checkbox'] ) )
                 checked( $featured['main-checkbox'][0], 'main' ); ?> />
                <?php _e( 'pin this post to main section', 'sm-textdomain' )?>
            </label>
            
        </div>
    </p>
 
    <?php
}


add_action( 'add_meta_boxes', 'm_custom_meta'  );

/**
 * Saves the custom meta input
 */
function sm_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
 // Checks for input and saves
if( isset( $_POST[ 'meta-checkbox' ] ) ) {
    update_post_meta( $post_id, 'meta-checkbox', 'featured' );
} else {
    update_post_meta( $post_id, 'meta-checkbox', '' );
}
 
}

function mm_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
 // Checks for input and saves
if( isset( $_POST[ 'main-checkbox' ] ) ) {
    update_post_meta( $post_id, 'main-checkbox', 'main' );
} else {
    update_post_meta( $post_id, 'main-checkbox', '' );
}
 
}

add_action( 'save_post', 'sm_meta_save' );

add_action( 'save_post',  'mm_meta_save' );



// customize footer

require get_template_directory().'/inc/customizer.php';