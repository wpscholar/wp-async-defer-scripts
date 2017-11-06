<?php

use \wpscholar\WordPress\AsyncDeferScripts;

// Only call our initialization function automatically if we are in a valid WordPress context
if ( function_exists( 'add_filter' ) ) {
    AsyncDeferScripts::initialize();
}
