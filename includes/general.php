<?php
// css/jsの読み込み
function my_css_js_init()
{
  // css
  wp_enqueue_style('devicon', '//cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css', array(), '1.0.0', 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');

  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_css_js_init');
