<?PHP
/**
 * @package Maha Copyright Date 
 * @version 1.0.0
 */
/*
Plugin Name: Maha Copyright Date
Plugin URI: http://wordpress.org/plugins/maha-copyright-date/
Description: Simple way to add your website name along with a copyright symbol and current year date. Use the following shortcode. [maha-copyright-date]
Author: Qamar Ramzan
Version: 1.0.0
Author URI: http://www.qamarramzan.com/
License: GPLv2 or later
*/



    

function maha_scd( $atts ) {
    
    $data = "";
    $data = shortcode_atts( array(

        // settings
        'change_name' => '', // Change name

    ), $atts, 'maha-copyright-date' );   
    
    
    $name = ''; 
    
    if ( empty( $data['change_name'] ) ) {
    
        $name = get_bloginfo( 'name' );
        
    } else {
        
        $name = $data['change_name'];
        
    }
    
    return '<span class="maha-add-date">&copy; ' . esc_attr( $name ). ' ' . date('Y'). '</span>';
}


add_shortcode( 'maha-copyright-date', 'maha_scd' );




?>
