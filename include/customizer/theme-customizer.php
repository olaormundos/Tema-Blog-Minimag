<?php
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/layout.php';

function olm_customize_register( $wp_customize ) {
  olm_social_customizer( $wp_customize );
  olm_layout_customizer( $wp_customize );
}