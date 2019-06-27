<?php

class SvelteWP
{
    public function __construct()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'swp_dependencies' ) );
    }

    public function swp_dependencies() 
    {
        wp_enqueue_script( 'swp', plugins_url( 'assets/build/bundle.js', dirname( __FILE__ ) ), array(), time(), true );
        wp_enqueue_style( 'swp', plugins_url( 'assets/build/bundle.css', dirname( __FILE__ ) ), array(), time() );
        
        // Optional
        wp_localize_script( 'swp', 'wordpress_object', array(
        	'plugins_url' => plugins_url( '/', dirname( __FILE__ ) ),
            'ajax_url' => admin_url( 'admin-ajax.php' ),
        ));
    }
}