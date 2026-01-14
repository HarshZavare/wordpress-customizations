<?php

function hz_acf_image_shortcode($atts) {
    $atts = shortcode_atts([
        'id' => ''
    ], $atts);

    $image = get_field('image_' . $atts['id']);
    $link  = get_field('link_' . $atts['id']);

    if (!$image) {
        return '';
    }

    if ($link) {
        return '<a href="' . esc_url($link) . '" target="_blank">
                    <img src="' . esc_url($image) . '" alt="ACF Image">
                </a>';
    }

    return '<img src="' . esc_url($image) . '" alt="ACF Image">';
}
add_shortcode('acf_image', 'hz_acf_image_shortcode');


function hz_acf_image_shortcode_with_post($atts) {
    $atts = shortcode_atts([
        'id' => '',
        'post_id' => ''
    ], $atts);

    $post_id = $atts['post_id'] ?: get_the_ID();

    $image = get_field('image_' . $atts['id'], $post_id);
    $link  = get_field('link_' . $atts['id'], $post_id);

    if (!$image) {
        return '';
    }

    if ($link) {
        return '<a href="' . esc_url($link) . '" target="_blank">
                    <img src="' . esc_url($image) . '" alt="ACF Image">
                </a>';
    }

    return '<img src="' . esc_url($image) . '" alt="ACF Image">';
}
add_shortcode('acf_image_post', 'hz_acf_image_shortcode_with_post');
