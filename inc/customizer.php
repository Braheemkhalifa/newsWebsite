<?php
 function wp_customize_footer_register($wp_customize){

        $wp_customize ->add_section('Footer',array(
            'title'=> __('Footer','wpbootstrap'),
            'description'=> sprintf(__('options for Footer','wpbootstrap')),
            'piroity' => 130
        )); 
           // description
        $wp_customize -> add_setting('Footer_description',array(  
            'default'  => _x('Description section','wpbootstrap'),
            'type'      => 'theme_mod'
        ));

        $wp_customize -> add_control('Footer_description',array(
            'label' => __('Heading','wpbootstrap'),
            'section' => 'Footer',
            'priority' => 1

        ));
        
        // facebook link
        $wp_customize -> add_setting('Footer_fbLink',array(  
            'default'  => _x('https://www.facebook.com','wpbootstrap'),
            'type'      => 'theme_mod'
        ));

        $wp_customize -> add_control('Footer_fbLink',array(
            'label' => __('Facebook Link','wpbootstrap'),
            'section' => 'Footer',
            'priority' => 2

        ));

        // twitter link
        $wp_customize -> add_setting('Footer_twLink',array(  
            'default'  => _x('https://www.twitter.com','wpbootstrap'),
            'type'      => 'theme_mod'
        ));

        $wp_customize -> add_control('Footer_twLink',array(
            'label' => __('Twitter Link','wpbootstrap'),
            'section' => 'Footer',
            'priority' => 3

        ));

        // instegram link
        $wp_customize -> add_setting('Footer_instaLink',array(  
            'default'  => _x('https://www.instegram.com','wpbootstrap'),
            'type'      => 'theme_mod'
        ));

        $wp_customize -> add_control('Footer_instaLink',array(
            'label' => __('Twitter Link','wpbootstrap'),
            'section' => 'Footer',
            'priority' => 4

        ));

        // Address
        $wp_customize -> add_setting('Footer_address',array(  
            'default'  => _x('address','wpbootstrap'),
            'type'      => 'theme_mod'
        ));

        $wp_customize -> add_control('Footer_address',array(
            'label' => __('Address','wpbootstrap'),
            'section' => 'Footer',
            'priority' => 5

        ));

        // Number
        $wp_customize -> add_setting('Footer_Number',array(  
            'default'  => _x('01127034564','wpbootstrap'),
            'type'      => 'theme_mod'
        ));

        $wp_customize -> add_control('Footer_Number',array(
            'label' => __('Number','wpbootstrap'),
            'section' => 'Footer',
            'priority' => 6

        ));

        // Mail
        $wp_customize -> add_setting('Footer_mail',array(  
            'default'  => _x('email@example.com','wpbootstrap'),
            'type'      => 'theme_mod'
        ));

        $wp_customize -> add_control('Footer_mail',array(
            'label' => __('Mial to contact','wpbootstrap'),
            'section' => 'Footer',
            'priority' => 6

        ));


 }



add_action('customize_register','wp_customize_footer_register');

?>