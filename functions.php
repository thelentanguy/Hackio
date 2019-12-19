<?php
// SETUP WP

function paf_setup () {

	// Support thumbnail
	add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'paf_setup');

?>

<?php

function xmas_theme_setup() {

    //support thumbnail //instruction // ajoute de rajouter une image à la une (mise en avant) à mes contenus (articles ou pages)
    add_theme_support('post-thumbnails');
    

    register_nav_menus(array(
        'main'=>'Menu principal du xmas',
        'top'=>'menu sommital'
));

}


function add_link_class($class)
{
    $class['class'] = "nav-item nav-link"; //on oublie pas, le [] équivaut à array() qui signifie un tableau
    return $class;
}



add_filter('nav_menu_link_attributes', 'add_link_class');


add_action('after_setup_theme', 'xmas_theme_setup');