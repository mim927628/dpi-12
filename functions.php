<?php

wp_enqueue_style('style-1', get_stylesheet_uri());
wp_enqueue_style('style-2', get_template_directory_uri().'/bootstrap/css/bootstrap.min.css');
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0.', true );

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

register_nav_menus([
    'TM'=>'Primary',
    'FM'=>'Fotter'
]);

register_sidebar(array(
    'name'=>'main banner',
    'id'=> 'mainbanner',
    'before_widget'=>'',
    'after_widget'=>''
));

register_sidebar(array(
    'name'=>'sidebar image',
    'id'=> 'sideimg',
    'before_widget'=>'',
    'after_widget'=>''
));

register_sidebar(array(
    'name'=>'sidebar video',
    'id'=> 'sidevideo',
    'before_widget'=>'',
    'after_widget'=>''
));

register_sidebar(array(
    'name'=>'footer top image',
    'id'=> 'ftimg',
    'before_widget'=>'',
    'after_widget'=>''
));

register_sidebar(array(
    'name'=>'list',
    'id'=> 'list',
    'before_widget'=>'',
    'after_widget'=>''
));

?>