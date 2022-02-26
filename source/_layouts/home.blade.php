<?php
/**
 * Default home template
 * 
 * @package   Individuality
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2014-2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */
?>
<!doctype html>
<html>
<head>
    <title>{{ $page->siteName }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix( 'css/screen.css', 'assets' ) }}">
</head>
<body>
    <section id="container" class="site-container">
        <header id="header" class="site-header header-image">
            <div class="branding-navigation">
                <div class="site-branding">
                    <h1 class="site-title"><a href="/">{{ $page->siteName }}</a></h1>
                    <h3 class="site-description">{{ $page->siteDescription }}</h3>
                </div>
            </div>
            <nav id="primary" class="menu-primary">
                <button class="menu-toggle" onclick="myFunction()"><?= e( 'Menu' ); ?></button>
                <ul class="menu-items">
                    <li class="menu-item"><a href="/">Home</a></li>
                    <li class="menu-item"><a href="/about-me">About Me</a></li>
                </ul>
            </nav>
        </header>
        @yield( 'body' )
        <footer id="footer" class="site-footer">
            <div class="site-info">
                Powered by love and heart
            </div>
        </footer>
    </section>
</body>
</html>