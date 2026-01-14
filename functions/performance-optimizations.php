<?php

funcion hz_preload_images() {
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".pl img").forEach(img => {
                const link = document.createElement("link");
                link.rel = "preload";
                link.as = "image";
                link.href = img.src;
                document.head.appendChild(link);
            });
        });
    </script>
    <?php
}
add_action('wp_footer', 'hz_preload_images');


function hz_add_fetch_priority() {
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".pl img").forEach(img => {
                img.setAttribute("fetchpriority", "high");
            });
        });
    </script>
    <?php
}
add_action('wp_footer', 'hz_add_fetch_priority');


function hz_remove_lazy_loading() {
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll('.pl img[loading="lazy"]').forEach(img => {
                img.removeAttribute("loading");
            });
        });
    </script>
    <?php
}
add_action('wp_footer', 'hz_remove_lazy_loading');


function hz_preload_custom_fonts() {
    ?>
    <link rel="preload" href="https://www.x1bytes.site/wp-content/litespeed/css/content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://www.x1bytes.site/wp-content/litespeed/css/content/plugins/jeg-elementor-kit/assets/fonts/jkiticon/jkiticon.woff2" as="font" type="font/woff2" crossorigin>
    <?php
}
add_action('wp_head', 'hz_preload_custom_fonts', 1);
