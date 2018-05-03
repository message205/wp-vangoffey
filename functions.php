<?php

add_action('wp_head', 'wpse_43672_wp_head');
function wpse_43672_wp_head(){
    //Close PHP tags 
    ?>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    
    <?php //Open PHP tags
}

add_filter('avia_load_shortcodes', 'avia_include_shortcode_template', 15, 1);
function avia_include_shortcode_template($paths)
{
	$template_url = get_stylesheet_directory();
    	array_unshift($paths, $template_url.'/shortcodes/');

	return $paths;
}