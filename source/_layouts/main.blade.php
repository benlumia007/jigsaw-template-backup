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
    <link rel="stylesheet" href="{{ mix( 'css/screen.css', 'assets/scripts' ) }}">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Merriweather:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <section id="container" class="site-container">
        <header id="masthead" class="site-header">
            <div class="branding-navigation">
                <div class="site-branding">
                    <h1 class="site-title"><a href="/">{{ $page->siteName }}</a></h1>
                    <h3 class="site-description">{{ $page->siteDescription }}</h3>
                </div>
                <nav id="primary" class="menu-primary">
                    <button class="menu-toggle"><?= e( 'Menu' ); ?></button>
                    <ul class="menu-items">
                        <li class="menu-item"><a class="{{ $page->selected('about-me') }}" href="/about-me">About Me</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        @yield( 'body' )
        <footer id="footer" class="site-footer">
            <div class="site-info">
                Powered by love and heart
            </div>
        </footer>
    </section>
    <script rel="javascript" src="{{ mix( 'js/app.js', 'assets/scripts' ) }}"></script>
</body>
</html>