<?php

namespace wpscholar\WordPress;

/**
 * Class DeferScripts
 * @package wpscholar\WordPress
 */
class AsyncDeferScripts {

    public static function initialize() {
        add_filter( 'script_loader_tag', array( __CLASS__, 'deferScripts' ), 10, 2 );
        add_filter( 'script_loader_tag', array( __CLASS__, 'asyncScripts' ), 10, 2 );
    }

    public static function deferScripts( $tag, $handle ) {
        if ( wp_scripts()->get_data( $handle, 'defer' ) ) {
            $tag = str_replace( '></', ' defer></', $tag );
        }

        return $tag;
    }

    public static function asyncScripts( $tag, $handle ) {
        if ( wp_scripts()->get_data( $handle, 'async' ) ) {
            $tag = str_replace( '></', ' async></', $tag );
        }

        return $tag;
    }

}
