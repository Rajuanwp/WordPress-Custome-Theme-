<?php

/*Thsi Functioin is use for Title  */


//Google Font 
function google_font_add_os(){
    wp_enqueue_style('rajuan_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
  }
  add_action('wp_enqueue_scripts', 'google_font_add_os');

//Theme Title 
add_theme_support( 'title-tag');

// =========================================================================
// BOOTSTRAP CSS
// =========================================================================
function enqueue_bootstrap_styles(){ 
    wp_enqueue_style('bootstrap_css', '//stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css');
    
    wp_enqueue_style( 'my_theme', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap_styles' );
  
// =========================================================================
// BOOTSTRAP JAVASCRIPT
// =========================================================================
function enqueue_bootstrap_scripts() {  
    wp_enqueue_script( 'bootstrap_jquery', '//code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.3.1', true );
    wp_enqueue_script( 'bootstrap_popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array(), '1.14.7', true );
    wp_enqueue_script( 'bootstrap_javascript', '//stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js', array(), '4.3.1', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap_scripts' );


// Function for CSS and JS Calling 

function css_js_file_Caalling(){ 
    wp_register_script('main_js',get_stylesheet_uri().'/js/main.js',array(),'1.0.0', true);
    wp_enqueue_script('main_js');
}
// add for function call 
add_action( 'wp_enqueue_scripts', 'css_js_file_Caalling' );


/* ===========================
    Header Area Function
===============================*/

function logo_customizar_register($wp_customize){
    $wp_customize->add_section('logo_herder_area',array(
        'title'=>__('Header Area','rajuan'),
        'description'=>'If you interested to update your header area,you cam do it hear',

    ));
    $wp_customize->add_setting('main_logo',array(
        'default'=>get_bloginfo( 'template_directory').'/img/logo.png',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'main_logo',array(

        'label'=>'Logo Upload',
        'description'=>'If you interested to Uplode your logo hear',
        'setting'=>'main_logo',
        'section'=>'logo_herder_area'
    )));


    //Menu Position Functioon 
    $wp_customize->add_section('rz_menu_option',array(

        'title'=>__('Menu Position Option ','rajuan'),
        'description'=>'If You Interest to changfe your manu Position hear'
    ));

    $wp_customize->add_setting('rz_menu_postion',array(

        'default'=>'right_menu',

    ));
    $wp_customize->add_control('rz_menu_postion',array(
        'label'=>'Menu Position',
        'description'=>'Select Your Menu Postiton',
        'setting'=>'rz_menu_postion',
        'section'=>'rz_menu_option',
        'type' => 'radio',
        'choices'=>array(
            'left_nemu'=>'Left Menu',

            'right_nemu'=>'Right Menu',

            'center_nemu'=>'Center Menu',
        ),
    ));

}

add_action( 'customize_register','logo_customizar_register');


//Main Menu 
register_nav_menu( 'first_main_menu',__('Main Menu','rajuan'));






