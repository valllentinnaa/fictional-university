<?php

/*
 Plugin Name: My First Plugin
 Description: Ailqk
 */

add_filter('the_content', 'amazingContentEdits');

function amazingContentEdits($content) {
    $content = $content . '<p> Amazing plugin functionality over here!</p>';
    return $content;
}

add_shortcode('testingShortcodes', 'returnStars');

function returnStart() {
    return '*********************';
}