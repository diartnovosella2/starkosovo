<?php

namespace Modular\Child;

use Modular\Parent\Enqueue as _Enqueue;

class Enqueue extends _Enqueue
{

    public function admin_enqueue()
    {
        //styles admin
        wp_enqueue_style('mdlc_gig_style_admin', get_stylesheet_directory_uri() . '/assets/dist/admin.css', array(), $this->cache_breaker('/assets/dist/admin.css'));
        //scripts admin
        wp_enqueue_script('mdlc_gig_script_admin', get_stylesheet_directory_uri() . '/assets/dist/admin.js', array('jquery'), $this->cache_breaker('/assets/dist/admin.js'));
    }

    public function front_enqueue()
    {
        //styles front
        wp_enqueue_style('mdlc_gig_style', get_stylesheet_directory_uri() . '/assets/dist/front.css', array(), $this->cache_breaker('/assets/dist/front.css'));
        //script front
        wp_enqueue_script('mdlc_gig_script', get_stylesheet_directory_uri() . '/assets/dist/front.js', array('jquery'), $this->cache_breaker('/assets/dist/front.js'), true);
        // Fonts
        wp_enqueue_style('mdlc_gig_fonts', get_stylesheet_directory_uri() . '/assets/sass/utilities/_fonts.scss', array(), $this->cache_breaker('/assets/sass/utilities/_fonts.scss'));
        
        if ( is_page_template('page-reg.php') ) {
            // Localize Script for JS
            wp_register_script( 'registerForm', get_stylesheet_directory_uri() . '/assets/js/registerForm.js', array('jquery') );
            wp_localize_script( 'registerForm', 'script_object', array('ajax_url' => admin_url('admin-ajax.php')) );
            wp_enqueue_script( 'registerForm' );
        }
        if ( is_page_template('page-jobs.php') ) {
            // Localize Script for JS
            wp_register_script( 'filterJobs', get_stylesheet_directory_uri() . '/assets/js/filterJobs.js', array('jquery') );
            wp_localize_script( 'filterJobs', 'script_object', array('ajax_url' => admin_url('admin-ajax.php')) );
            wp_enqueue_script( 'filterJobs' );
        }
    }
}