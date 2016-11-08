<?php
//Мініатюра
add_theme_support( 'post-thumbnails' );
// menu
register_nav_menu('menu' , 'Heder menu');
//
	$args = array(
		'name'          => 'Віджет Saidebar',
		'id'            => "sidebar",
		'description'   => 'Тут буде віджет',
		
		'before_widget' => ' <div id="asid">',
		'after_widget'  => '</div>',
        'before_title' => '<div id="categoryTitle"><h5><b>',
		'after_title'  => '</b></h5></div>'
        
		);
register_sidebar($args);