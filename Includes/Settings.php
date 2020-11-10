<?php

namespace Modular\Child;

use Modular\Parent\Settings as _Settings;

class Settings extends _Settings
{
    /**
     * Filters go here
     */
    public function prepare_fields()
    {
        parent::prepare_fields();
        // Add other filters here
    }

    /**
     * Register ajax hooks
     */
    public function ajax_hooks()
    {
        parent::ajax_hooks();
        // Add other hooks here
    }

    /**
     * Theme Sub Page fields
     * acf-options-site
     */
    public function acf_options_site_fields()
    {
        if (function_exists('acf_add_local_field_group')) {
            acf_add_local_field_group(array(
                'key'                   => 'group_5ca7217c976fd',
                'title'                 => 'Footer Settings',
                'fields'                => array(
                    array(
                        'key'               => 'field_5ca7229d2e658',
                        'label'             => 'Social Media',
                        'name'              => 'social_media',
                        'type'              => 'repeater',
                        'instructions'      => '',
                        'required'          => 0,
                        'conditional_logic' => 0,
                        'wrapper'           => array(
                            'width' => '',
                            'class' => '',
                            'id'    => '',
                        ),
                        'collapsed'         => '',
                        'min'               => 0,
                        'max'               => 0,
                        'layout'            => 'table',
                        'button_label'      => 'Add Social Media',
                        'sub_fields'        => array(
                            array(
                                'key'               => 'field_5ca722fb2e659',
                                'label'             => 'Icon',
                                'name'              => 'icon',
                                'type'              => 'image',
                                'instructions'      => '',
                                'required'          => 0,
                                'conditional_logic' => 0,
                                'wrapper'           => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id'    => '',
                                ),
                                'return_format'     => 'id',
                                'preview_size'      => 'thumbnail',
                                'library'           => 'all',
                                'min_width'         => '',
                                'min_height'        => '',
                                'min_size'          => '',
                                'max_width'         => '',
                                'max_height'        => '',
                                'max_size'          => '',
                                'mime_types'        => '',
                            ),
                            array(
                                'key'               => 'field_5ca723152e65a',
                                'label'             => 'Link',
                                'name'              => 'link',
                                'type'              => 'url',
                                'instructions'      => '',
                                'required'          => 0,
                                'conditional_logic' => 0,
                                'wrapper'           => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id'    => '',
                                ),
                                'default_value'     => '',
                                'placeholder'       => '',
                            ),
                        ),
                    ),
                ),
                'location'              => array(
                    array(
                        array(
                            'param'    => 'options_page',
                            'operator' => '==',
                            'value'    => 'acf-options-site',
                        ),
                    ),
                ),
                'menu_order'            => 0,
                'position'              => 'normal',
                'style'                 => 'default',
                'label_placement'       => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen'        => '',
                'active'                => true,
                'description'           => '',
            ));
        }
    }
}