<?php
function wphahamu_customizer($wp_customize){
    //Copyright
    $wp_customize->add_section(
        'sec_copyright', [
            'title' => 'Copyright',
            'description' => 'Copyright Section'
        ]);

    $wp_customize->add_setting(
        'set_copyright', [
            'type' => 'theme_mod',
            'default' => 'Copyright X - All right reserved',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        ]);

    $wp_customize->add_control(
        'set_copyright', [
            'label' => 'Copyright',
            'description' => 'Set your Copyright',
            'section' => 'sec_copyright',
            'type' => 'text'
    ]);
}
add_action('customize_register', 'wphahamu_customizer');