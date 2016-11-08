<?php
//Мініатюра
add_theme_support( 'post-thumbnails' );
// menu
register_nav_menu('menu' , 'Heder menu');
// Віджет sidebar
	$args = array(
		'name'          => 'Віджет sidebar',
		'id'            => "sidebar",
		'description'   => 'Тут буде віджет  саідебара',
		
		'before_widget' => '',
		'after_widget'  => '',
        'before_title' => '<div id="categoryTitle"><h5><b>',
		'after_title'  => '</b></h5></div>'
        
		);
register_sidebar($args);

// Віджет footer
	$args_footer = array(
		'name'          => 'Віджет footer',
		'id'            => "footer",
		'description'   => 'Тут буде віджет футера',
		'after_widget'  => '<hr>',
		'before_widget' => '<div id="category_footer">',
		'after_widget'  => '</div>',
      
        
		);
register_sidebar($args_footer);