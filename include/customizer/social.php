<?php
function olm_social_customizer( $wp_customize ) {
  // Settings
    $wp_customize->add_setting('olm_facebook', array('default'=>''));
    $wp_customize->add_setting('olm_instagram', array('default'=>''));
    $wp_customize->add_setting('olm_twitter', array('default'=>''));
    $wp_customize->add_setting('olm_youtube', array('default'=>''));

  // Sections
    $wp_customize->add_section('olm_social_saction', array(
      'title'    =>'Redes Sociais',
      'priority' => 2,
      'panel'    => 'opcoes'
    ));
  // Controllers
    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'olm_facebook',
        array(
          'label'    =>'Adicione o link do Facebook',
          'section'  => 'olm_social_saction',
          'settings' => 'olm_facebook',
          'type'     => 'text'
        )
      )
    );
    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'olm_instagram',
        array(
          'label'    =>'Adicione o link do Instagram',
          'section'  => 'olm_social_saction',
          'settings' => 'olm_instagram',
          'type'     => 'text'
        )
      )
    );
    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'olm_twitter',
        array(
          'label'    =>'Adicione o link do Twitter',
          'section'  => 'olm_social_saction',
          'settings' => 'olm_twitter',
          'type'     => 'text'
        )
      )
    );
    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'olm_youtube',
        array(
          'label'    =>'Adicione o link do Youtube',
          'section'  => 'olm_social_saction',
          'settings' => 'olm_youtube',
          'type'     => 'text'
        )
      )
    );

}