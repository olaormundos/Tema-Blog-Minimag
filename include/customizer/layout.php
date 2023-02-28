<?php
function olm_layout_customizer( $wp_customize ) {
  // Settings
    $wp_customize->add_setting('olm_topmenu_show', array('default' =>'yes'));
    $wp_customize->add_setting('olm_search_show', array('default' =>'yes'));
    $wp_customize->add_setting('olm_privacy_url', array('default' =>''));
  // Sections
    $wp_customize->add_section('olm_layout_section', array(
      'title'    => 'Opções de Layout',
      'priority' => 1
    ));
  // Controllers
    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'olm_topmenu_show',
        array(
          'label'     => 'Mostrar Menu Superior',
          'section'   => 'olm_layout_section',
          'settings'  => 'olm_topmenu_show',
          'type'      => 'checkbox',
          'choices'   => array(
            'yes' => 'Sim'
          )
        )
      )
    );
    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'olm_search_show',
        array(
          'label'     => 'Mostrar a Busca',
          'section'   => 'olm_layout_section',
          'settings'  => 'olm_search_show',
          'type'      => 'checkbox',
          'choices'   => array(
            'yes' => 'Sim'
          )
        )
      )
    );
    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'olm_privacy_url',
        array(
          'label'     => 'Página de Política de Privacidade',
          'section'   => 'olm_layout_section',
          'settings'  => 'olm_privacy_url',
          'type'      => 'dropdown-pages',
        )
      )
    );
}