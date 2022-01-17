<?php
/**
 * Default header template.
 *
 * @package   Luthemes
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2014-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */
?>
<!doctype html>
<html>
<head>
    <title><?php
            $route = Benlumia007\Alembic\App::resolve( 'routes' )->currentRoute();
            $paged = '';
            $title_tag = 'p';

            if ( false !== strpos( $route, 'page/{number}' ) ) {
                $p = explode( '/', Benlumia007\Alembic\App::resolve( 'request' )->uri() );
                $paged = ': Page ' . e( array_pop( $p ) );
            }

            if ( '/' === $route || 'page/{number}' === $route ) {
                echo ! empty( $title ) ? e( $title ) . $paged : e( site_title() );
                $title_tag = 'h1';
            } else {
                echo ! empty( $title ) ? e( $title ) . $paged . ' &mdash; ' . e( site_title() ) : e( site_title() );
            }
    ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= e( asset( 'assets/css/screen.css' ) ) ?>" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script rel="javascript" src="<?= e( asset( 'assets/js/app.js' ) ) ?>"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Merriweather:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body class="home">
<section id="container" class="site-container">
	<header id="header" class="site-header header-image">
        <div class="branding-navigation">
            <div class="site-branding">
                <h1 class="site-title"><a href="<?= e( uri() ) ?>"><?= e( site_title() ); ?></a></h1>
                <h3 class="site-description"><?= e( site_tagline() ); ?></h3>
            </div>
            <nav id="primary" class="menu-primary">
                <button class="menu-toggle" onclick="myFunction()"><?= e( 'Menu' ); ?></button>
                <ul class="menu-items">
                    <?php e( primary_menu() ); ?>
                </ul>
                <script>
                    function myFunction() {
                        var x = document.getElementById( 'primary' );
                        if (x.className === 'menu-primary') {
                            x.className += ' responsive';
                        } else {
                            x.className = 'menu-primary';
                        }
                    }
                </script>
            </nav>
        </div>
	</header>