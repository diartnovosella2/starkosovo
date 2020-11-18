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
    }
}