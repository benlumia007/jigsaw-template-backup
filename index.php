<?php
/**
 * index template
 * 
 * This template should never be loaded since it is used to
 * define the root directory of the current directory and 
 * autoloads composer.
 * 
 * @package   Succotash
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Defines the root directory
 * 
 * Automatically defines ROOT_DIR.
 */
define( 'ROOT_DIR', __DIR__ );

/**
 * Let's run the composer autoloader.
 * 
 * Automatically loads the composer autoloader, but let's check
 * if it exists first, then load.
 */
if ( file_exists( 'vendor/autoload.php' ) ) {
    require_once( 'vendor/autoload.php' );
}