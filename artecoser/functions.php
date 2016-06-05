<?php
/**
 * Crear nuestros menús gestionables desde el
 * administrador de Wordpress.
 */
function mis_menus(){
    register_nav_menus(
    array('navegation' => _('Menu de navegación'),));
}
add_action('init', 'mis_menus');