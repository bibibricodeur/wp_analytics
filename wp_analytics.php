<?php

/**
 * @package Wp_analytics
 * @version 0.0.1
 */
/*
Plugin Name: Wp analytics
Plugin URI: https://gitlab.com/bibibricodeur
Description: Intégrer le tag de suivi d'<a href="https://analytics.google.com/">analytics</a> dans le head. 
Version: 00.1
Author: bibibricodeur
Author URI: 
License: WTFPL
*/

function wp_analytics()
{
?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXX-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-XXXXXXXXX-1');
    </script>
<?php
}

add_action('wp_head', 'wp_analytics', 10);

/// Fin
