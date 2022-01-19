<?php
/**
 * Framework instance
 * 
 * This file is used to create a new framework instance and adds specific features to the theme.
 * 
 * @package   Benlu
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Create a new framework instance.
 */
$benlu = new Benlumia007\Alembic\Framework();

/**
 * Loads the correct domain name.
 */
$config = require_once( 'app/functions-config.php' );

/**
 * Register default instances.
 */
$benlu->instance( 'path', ROOT_DIR );
$benlu->instance( 'uri', $config['uri'] );
$benlu->instance( 'uri/relative', parse_url( $benlu->uri, PHP_URL_PATH ) );
$benlu->instance( 'path/content', 'user/content' );
$benlu->instance( 'cache/meta', [ 'date', 'category', 'slug' ] );
$benlu->boot();

/**
 * Add default content types.
 */
Benlumia007\Alembic\ContentTypes::add( 'author', new Benlumia007\Alembic\Entry\Types\Author( $benlu->routes ) );
Benlumia007\Alembic\ContentTypes::add( 'post', new Benlumia007\Alembic\Entry\Types\Post( $benlu->routes ) );
Benlumia007\Alembic\ContentTypes::add( 'page', new Benlumia007\Alembic\Entry\Types\Page( $benlu->routes ) );

/**
 * Register content types
 */
Benlumia007\Alembic\ContentTypes::registerRoutes();

/**
 * Register home content type
 */
$benlu->routes->get( '/blog', Benlumia007\Alembic\Entry\Controllers\Blog::class );
$benlu->routes->get( '/', Benlumia007\Alembic\Entry\Controllers\Home::class );

// Launch the current controller.
$current = $benlu->routes->current();