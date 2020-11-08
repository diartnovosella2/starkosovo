<?php

define('MODC_THEME_DIR', __DIR__);

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'Options',
        'menu_title'	=> 'Options',
        'menu_slug' 	=> 'options',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Gallery',
        'menu_title'	=> 'Gallery',
        'parent_slug'	=> 'options',
    ));
  }
  
  
