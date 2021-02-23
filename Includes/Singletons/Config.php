<?php

namespace Modular\Child\Singletons;

use Modular\Parent\Singletons\Config as _Config;

class Config extends _Config
{

    public function __construct()
    {
    }

    /**
     * Default options for the theme
     *
     * @var array
     */
    public function default_options($child_array = [])
    {

        $child_array = array();

        return parent::default_options($child_array);
    }

    /**
     * Images size list mainly used for header images.
     *
     * @var array
     */
    public function header_images($child_array = [])
    {

        $child_array = array();

        return parent::header_images($child_array);
    }

    /**
     * Post types that should apply the Modular template. Typically all post types should be listed here.
     *
     * @var array
     */
    public function post_types($child_array = [])
    {

        $child_array = array(
            array(
                'name'     => 'application',
                'singular' => array('Application', 'application'),
                'plural'   => array('Applications', 'applications'),
                'supports' => array('title', 'thumbnail', 'revisions'),
                'order'    => 5,
                'rewrite'  => 'applications'
            ),
            array(
                'name'     => 'test',
                'singular' => array('test', 'test'),
                'plural'   => array('tests', 'tests'),
                'supports' => array('title', 'thumbnail', 'revisions'),
                'order'    => 5,
                'rewrite'  => 'tests'
            ),
            array(
                'name'     => 'registration',
                'singular' => array('Registration', 'registration'),
                'plural'   => array('Registrations', 'registrations'),
                'supports' => array('title', 'thumbnail', 'revisions'),
                'order'    => 5,
                'rewrite'  => 'registrations'
            ),
        );

        return parent::post_types($child_array);
    }

    /**
     * @var array
     */
    public function taxonomies($child_array = [])
    {
        
        $child_array = array(
            array(
                'name'     => 'application-type',
                'singular' => 'Application Type',
                'plural'   => 'Application Types',
                'posttype' => 'application',
                'rewrite'  => 'applications/category',
            ),
        );

        return parent::taxonomies($child_array);
    }

    /**
     * Field groups that should be attached to custom post types.
     *
     * @var array
     */
    public function posttype_custom_fields($child_array = [])
    {

        $child_array = array();

        return parent::posttype_custom_fields($child_array);
    }

    /**
     * Field groups that should be attached to a category/taxonomy set for a page or post dependent
     * on a condition found in acf..
     *
     * @var array
     */
    public function category_custom_fields($child_array = [])
    {

        $child_array = array();

        return parent::category_custom_fields($child_array);
    }

    /**
     * Navbar fields.
     *
     * @var array
     */
    public function category_conditional_custom_fields($child_array = [])
    {

        $child_array = array();

        return parent::category_conditional_custom_fields($child_array);
    }

    /**
     * @var array
     */
    public function schemas($child_array = [])
    {

        $child_array = array();

        return parent::schemas($child_array);
    }

    /**
     * Unset modules from the parent.
     *
     * @var array
     */
    public function menu_custom_fields($child_array = [])
    {

        $child_array = array();

        return parent::menu_custom_fields($child_array);
    }

    /**
     * Custom fields common for all posttype.
     *
     * @var array
     */
    public function all_posttype_custom_fields($child_array = [])
    {
        $child_array = array();

        return parent::all_posttype_custom_fields($child_array);
    }

    /**
     * To add Modules in post types
     * @example $child_array = array('image' => array('article', 'casino'));
     */
    public function modules_in_post_types($child_array = [])
    {
        /*
        $child_array = array(
            'article' => array(
                'top'    => array(
                    'carousel' => array(
                        'default' => array(),
                        'hidden'  => array()
                    )
                ),
                'bottom' => array(
                    'cards'
                )
            ),
            'casino'  => array(
                'top'    => array(
                    'carousel'
                ),
                'bottom' => array(
                    'cards'
                )
            )
        );
        */

        return parent::modules_in_post_types($child_array);
    }


    public function default_breakpoints($child_array = [])
    {
        $child_array = array(
            'desktop'      => 1659,
            'laptop'       => 1199,
            'tablet'       => 991,
            'large-mobile' => 767,
            'small-mobile' => 575
        );
        return parent::default_breakpoints($child_array);
    }
}
