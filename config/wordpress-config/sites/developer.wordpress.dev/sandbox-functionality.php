<?php

// Include Core themes
register_theme_directory( ABSPATH . 'wp-content/themes' );

add_filter( 'show_admin_bar', '__return_false' );
