<?php
function wphahamu_customizer($wp_customizer)
{
    //Copyright
    $wp_customizer->add_section(
        'sec_copyright', [
            'title' => 'Copyright',
            'description' => 'Copyright Section'
        ]);

    $wp_customizer->add_setting(
        'set_copyright', [
            'type' => 'theme_mod',
            'default' => 'Copyright X - All right reserved',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        ]);

    $wp_customizer->add_control(
        'set_copyright', [
            'label' => 'Copyright',
            'description' => 'Set your Copyright',
            'section' => 'sec_copyright',
            'type' => 'text'
    ]);

    //Contato Header
    $wp_customizer->add_section(
        'sec_contato', [
            'title' => 'Header Contact',
            'description' => 'Header Phone and Email Section'
        ]);

    $wp_customizer->add_setting(
        'set_telefone', [
            'type' => 'theme_mod',
            'default' => '(XX) XXXX-XXXX',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        ]);

    $wp_customizer->add_control(
        'set_telefone', [
            'label' => 'Telefone',
            'description' => 'Set your phone',
            'section' => 'sec_contato',
            'type' => 'text'
        ]);

    $wp_customizer->add_setting(
        'set_email', [
        'type' => 'theme_mod',
        'default' => 'contato@dominio.com.br',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);

    $wp_customizer->add_control(
        'set_email', [
        'label' => 'Email',
        'description' => 'Set your email',
        'section' => 'sec_contato',
        'type' => 'text'
    ]);

    // Slider
    $wp_customizer->add_section(
        'sec_slider', [
            'title' => 'Slider',
            'description' => 'Slider Section'
        ]);

    // Design Type
    $wp_customizer->add_setting(
        'set_slider_option', [
            'type' => 'theme_mod',
            'default' => 1,
            'sanitize_callback' => 'wphahamu_sanitize_select'
        ]);

    $wp_customizer->add_control(
        'set_slider_option', [
            'label' => 'Choose your design type',
            'description' => 'Choose your design type',
            'section' => 'sec_slider',
            'type' => 'select',
            'choices' => [
                '1' => 'Design 1',
                '2' => 'Design 2',
                '3' => 'Design 3',
                '4' => 'Design 4',
            ]]);

    $wp_customizer->add_setting(
        'set_slider_limit', [
            'type' => 'theme_mod',
            'default' => 3,
            'saniteze_callback' => 'absint',
        ]);

    $wp_customizer->add_control(
        'set_slider_limit', [
            'label' => 'Set recent posts limit',
            'description' => 'How many post will the slider show?',
            'section' => 'sec_slider',
            'type' => 'number'
        ]);
}
add_action('customize_register', 'wphahamu_customizer');

/*
    Adding select option to customizer
    Thanks to DIVPUSHER
    Website: https://divpusher.com/blog/wordpress-customizer-sanitization-examples
 */
function wphahamu_sanitize_select( $input, $setting )
{

    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible select options
    $choices = $setting->manager->get_control( $setting->id )->choices;

    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}