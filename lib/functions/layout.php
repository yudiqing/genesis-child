<?php
/**
 * Modify some of the layout 
 *
 * @package     GenesisMaterial
 * @since       1.0.0
 * @author      Vincent D. Yu
 * @link        https://yudiqing.com
 * @license     GNU General Public License 2.0+
 */
namespace GenesisMaterial;

 add_filter( 'genesis_theme_support_structural_wraps', __NAMESPACE__ . '\disable_structural_wraps' );
 /**
  * Disable genesis structural wraps
  * @param $structural_wraps
  * @return array | null
  */
 function disable_structural_wraps($structural_wraps ){
    return $structural_wraps = [];
}

// /**
//  * Un-Register the initial layouts
//  *
//  * @return void
//  */
// function unregister_site_layouts(){
//     $layouts = array(
//         'content-sidebar',
//         'sidebar-content',
//         'content-sidebar-sidebar',
//         'sidebar-sidebar-content',
//         'sidebar-content-sidebar',
////         'full-width-content',
//     );
//
//     foreach ($layouts as $layout) {
//         genesis_unregister_layout( $layout );
//     }
//}
//
//unregister_site_layouts();