<?php
require get_template_directory().'/include/customizer/social.php';

function olm_customize_register( $wp_customize ) {
  olm_social_customizer( $wp_customize );
}