<?php

namespace Modular\Modules\ResourcesPreview;

/**
 * Class Admin is the backend part of the module.
 *
 * Use this class to define the backend part of the module. To clone this
 * class simply change the namespace and the returned value in the name method.
 * For good documentation update also the @package reference too.
 *
 * @package Modular\Modules\ResourcesPreview
 */
class Admin
{

    /**
     * Define the name of the module.
     *
     * The name of the module should be in lowercase and snake_case. Use $this->name()
     * were needed in this class to make your logic more dynamic.
     *
     * @return string The name of the module in lowercase and snake_case.
     */
    public function name()
    {

        return 'resources_preview';
    }

    /**
     * Configure default values and hidden fields.
     *
     * The module contains a lot of fields to allow more flexible configurations. Defining
     * default values and hiding fields can be used to restrict the site manager from inserting
     * wrong values and also making the module easier to use.
     *
     * This function can be removed if not needed.
     *
     * @return array A list of fields with default values and another that should be hidden
     */
    public function set_default()
    {

        return array(
            'default' => array(),
            'hidden'  => array()
        );
    }

    /**
     * Define the list of fields to dynamically populate.
     *
     * Some fields' values cannot be hardcoded, such as a list of post types or categories, since
     * these can change at anytime. List the field names that require logic to obtain
     * the right value.
     *
     * This function can be removed if not needed.
     *
     * @return array A list of fields.
     */
    public function prepare_fields()
    {

        return array();
    }

    /**
     * Configure and populate the fields that should have dynamically loaded values.
     *
     * Some fields' values cannot be hardcoded, such as a list of post types or categories, since
     * these can change at anytime. Use a switch to define the logic for a field to populate the
     * right values.
     *
     * @param $field The ACF field array.
     *
     * @return mixed The updated ACF field array.
     */
    public function prepare_field($field)
    {

        switch ($field[ '_name' ]) {

        }

        return $field;
    }

    /**
     * Configure image sizes to be cropped for different platforms.
     *
     * If an image is rendered at different resolutions on different screen sizes, it's recommended
     * to configure cropping sizes where needed to optimize page load time. The array accepts 5
     * different screen sizes; desktop, laptop, tablet, large-mobile, small-mobile. For best
     * optimization make sure the right breakpoints are set in the Config class, default_breakpoints
     * method.
     *
     * More than one image name size can be created, and it's important to keep this naming unique
     * throughout all the modules. It's thus recommended to use the name of the module in the image
     * name.
     *
     * To apply the configured cropping on the image needed, when setting up the image details in
     * the $data variable in the Front class of the same module pass the image name defined here to
     * the set_image method.
     *
     * This function can be removed if not needed.
     *
     * @return array
     */
    public function create_image_sizes()
    {

        return array();
    }

    /**
     * Module's admin ajax logic.
     *
     * Use a switch to differ any logic between multiple ajax calls using a POST parameter 'function'.
     * The ajax jQuery function should be called in the admin.js file within the same module. This
     * function can be removed if not needed.
     */
    public function ajax()
    {

        if (!empty($_POST[ 'function' ])) {

            switch ($_POST[ 'function' ]) {
                case '':
                break;
            }
        }

        wp_die();
    }

    /**
     * Localize values to JS before admin page load.
     *
     * Populate $data['data'] variable with values needed in your JS before page load. This can be accessed
     * from JS using the modules_object.
     *
     * This function can be removed if not needed.
     *
     * @return array List with values to attach to modules_object JS object.
     */
    public function localize_script()
    {

        $data = array();

        return $data;
    }

    /**
     * The ACF fields array for the module.
     *
     * Place the PHP Generated array provided by ACF export Tool here. Replace the module group title with
     * ucwords(str_replace(array('-', '_'), ' ', $this->name())) and the location value with
     * 'module-taxonomy:' . $this->name().
     *
     * @return array The ACF fields list.
     */
    public function get_fields()
    {

        return array(
            'key' => 'group_5fb04144c3ffd',
            'title' => ucwords(str_replace(array('-', '_'), ' ', $this->name())),
            'fields' => array(
                array(
                    'key' => 'field_5fb0415413092',
                    'label' => 'Resources Preview',
                    'name' => 'resources_preview',
                    'type' => 'group',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'layout' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_1ec43e0cf1619',
                            'label' => 'Show Description',
                            'name' => 'show_description',
                            'type' => 'button_group',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array(
                                'Yes' => 'Yes',
                                'No' => 'No',
                            ),
                            'allow_null' => 0,
                            'default_value' => '',
                            'layout' => 'horizontal',
                            'return_format' => 'value',
                        ),
                        array(
                            'key' => 'field_5fb047151d6dc',
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '40',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_5fb047201d6dd',
                            'label' => 'Description',
                            'name' => 'description',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_1ec43e0cf1619',
                                        'operator' => '==',
                                        'value' => 'Yes',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '60',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_5fb0417d13093',
                            'label' => 'Selector',
                            'name' => 'selector',
                            'type' => 'button_group',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array(
                                'latest' => 'Latest',
                                'manual' => 'Manual',
                            ),
                            'allow_null' => 0,
                            'default_value' => '',
                            'layout' => 'horizontal',
                            'return_format' => 'value',
                        ),
                        array(
                            'key' => 'field_5fb041d813094',
                            'label' => 'Manual Articles',
                            'name' => 'manual_articles',
                            'type' => 'relationship',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5fb0417d13093',
                                        'operator' => '==',
                                        'value' => 'manual',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'post_type' => array(
                                0 => 'article',
                            ),
                            'taxonomy' => '',
                            'filters' => array(
                                0 => 'search',
                            ),
                            'elements' => '',
                            'min' => '',
                            'max' => 3,
                            'return_format' => 'object',
                        ),
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param'    => 'post_taxonomy',
                        'operator' => '==',
                        'value'    => 'module-taxonomy:' . $this->name(),
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        );
    }
}

