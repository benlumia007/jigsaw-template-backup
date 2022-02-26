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
        </header>
    </section>
</body>
</html>