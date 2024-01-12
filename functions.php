<?php 

function olivia_johnson_files(){
    wp_enqueue_style('olivia_johnson_main_styles', get_stylesheet_uri());
};
add_action('wp_enqueue_scripts', 'olivia_johnson_files');
?>