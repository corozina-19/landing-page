<?php

/**
* Load an inline SVG.
*
* @param string $filename The filename of the SVG you want to load.
*
* @return string The content of the SVG you want to load.
*/
function load_inline_svg( $filename ) {

    // Check the SVG file exists
    if ( file_exists( get_stylesheet_directory() . $filename ) ) {

        // Load and return the contents of the file
        return file_get_contents( get_stylesheet_directory_uri() . $filename );
    }

    // Return a blank string if we can't find the file.
    return '';
}