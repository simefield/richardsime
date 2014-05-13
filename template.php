<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="richardsime.com" >
        <meta name="copyright" content="Copyright 2013 Richard Sime. All rights reserved." />
        <meta name="viewport" content = "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="HandheldFriendly" content="true" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="apple-touch-icon-precomposed" href="./custom_icon_precomposed.png" />
        <!-- iPhone -->
        <link href="./apple-touch-startup-image-320x460.jpg" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image" />
        <!-- iPhone (Retina) -->
        <link href="./apple-touch-startup-image-640x920.jpg" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
        <!-- iPhone 5 -->
        <link href="./apple-touch-startup-image-640x1096.jpg" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
        <!-- iPad (portrait) -->
        <link href="./apple-touch-startup-image-768x1004.jpg" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image" />
        <!-- iPad (landscape) -->
        <link href="./apple-touch-startup-image-1024x748.jpg" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image" />
        <!-- iPad (Retina, portrait) -->
        <link href="./apple-touch-startup-image-1536x2008.jpg" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
        <!-- iPad (Retina, landscape) -->
        <link href="./apple-touch-startup-image-2048x1496.jpg" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
        <title><?php print ($pageTitle);?></title>
        <link rel='shortcut icon' href='./favicon.ico' type='image/x-icon' />
        <link rel='stylesheet' href='./css/main.css' media='all' />
        <script src='./js/zepto.min.js'></script>
        <script src='./js/modernizr.js'></script>
    </head>
    <body class='<?php print ($bodyClass);?>'>
        <div id="wrapper">
            <div id="mask_desktop">
                <img src="./images/splash-desktop.png" alt='navigate portfolio with arrow keys' />
            </div><!-- /mask_desktop -->
            <?php /*
            <div id="mask_touch">
                <img src="./images/splash-touch.png?nocache=1" alt='navigate portfolio with touch swipe' />
            </div>
            */ ?>

            <?php /*
            <nav>
                <ul>
                    <li><a href="./">Portfolio</a></li>
                    <li><a href="./about-me.php">About me</a></li>
                </ul>
            </nav>
            */ ?>

            <header itemscope itemtype="http://schema.org/Person" role='header'>
                <ul>
                    <li><span itemprop='addressRegion'>Wellington</span>, <span itemprop='addressCountry'>New Zealand</span></li>
                    <li><a itemprop='telephone' href="tel:0064-22-568-8907">+64.22.568.8907</a></li>
                    <li><a itemprop='email' href="mailto:me@richardsime.com">me@richardsime.com</a></li>
                </ul>
                <h1><b itemprop='givenName'>Richard</b> <b itemprop='familyName'>Sime</b> <em>\</em> <span itemprop='jobTitle'>Front-end Developer</span></h1>
            </header>

            <section id='container'>
                <?php require_once ($content); ?>
                
                <footer>
                    <ul id="bullets"></ul>
                </footer>
            </section><!-- /container -->
        </div><!-- /wrapper -->

        <script src='./js/hide.address.bar.js'></script>
        <script src='./js/zepto.scroll.js'></script>
        <script src='./js/common.min.js'></script>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-16932492-1']);
            _gaq.push(['_trackPageview']);
            (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </body>
</html>

