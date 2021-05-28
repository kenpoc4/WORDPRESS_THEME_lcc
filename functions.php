<?php

// <!-- Registro de: Hojas CSS, librerias y scripts  -->
function no_importa_el_nombre_de_esta_funcion(){
    
    // Registro de Hoja de estilos CSS
    wp_enqueue_style('style', get_stylesheet_uri(), array(  ), '1.0.0');
    
    // Registro de fuentes
    wp_enqueue_style( 'fuente-open', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600;700&display=swap', array(), '1.0.0');
    wp_enqueue_style( 'fuente-monse', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap', array(), '1.0.0' );

    // Registro de archivo JS
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0.0', true);

}
add_action('wp_enqueue_scripts',  'no_importa_el_nombre_de_esta_funcion');