<?php

$wp_customize->add_panel('main_page_settings_panel', array(

));

$wp_customize->add_setting('main_page_hero_choices_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_section('main_page_hero_section', array(
    'title' => __('STB Hero', 'stb'),
    'prioryty' => 35
));

// Hero section Choices
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_hero_choices_input',
        array(
            'label'  => __('Hero  choices','stb'),
            'section' => 'main_page_hero_section',
            'settings' => 'main_page_hero_choices_setting',
            'type' => 'radio',
            'choices'        => array(
                'hero 1'   => __( 'hero 1' ),
                'hero 2'  => __( 'hero 2' ),
                'hero 3'  => __( 'hero 3' )
            )
        )
    )
);

// Hero Slider Image 1
$wp_customize->add_setting('main_page_hero_image_1_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stb_hero_image_1_input',
        array(
            'label'  => __('Hero handle 1','stb'),
            'section' => 'main_page_hero_section',
            'settings' => 'main_page_hero_image_1_setting',

        )
    )
);

// Hero Slider Image 2
$wp_customize->add_setting('main_page_hero_image_2_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stb_hero_image_2_input',
        array(
            'label'  => __('Hero handle 2','stb'),
            'section' => 'main_page_hero_section',
            'settings' => 'main_page_hero_image_2_setting',

        )
    )
);
