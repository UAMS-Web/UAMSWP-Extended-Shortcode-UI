<?php

//namespace UAMS\Shortcode_UI\UAMSAdmin_Shortcake;

function button_editor_styles() {
    add_editor_style( plugins_url( '../css/uamsbuttons-admin.css', __FILE__ ));
}
add_action( 'admin_init', 'button_editor_styles' );