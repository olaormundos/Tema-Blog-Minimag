<?php
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/layout.php';

function olm_customize_register( $wp_customize ) {
  // altera section existentes por padrão do Wordpress
  $wp_customize->get_section('custom_css')->description = '';
  // adiciona um painel com as opções do tema no customizer
  $wp_customize->add_panel('opcoes', array(
    'title'     => 'Opções do Tema',
    'priority'  => 1
  ));
  // registra as opções de customização no tema
  olm_social_customizer( $wp_customize );
  olm_layout_customizer( $wp_customize );
}