<?php

namespace Modular\Modules\HeaderModule;

/**
 * Class Admin is the backend part of the module.
 *
 * Use this class to define the backend part of the module. To clone this
 * class simply change the namespace and the returned value in the name method.
 * For good documentation update also the @package reference too.
 *
 * @package Modular\Modules\HeaderModule
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

        return 'header_module';
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
            'key' => 'group_5fa7231d0a547',
            'title' => ucwords(str_replace(array('-', '_'), ' ', $this->name())),
            'fields' => array(
                array(
                    'key' => 'field_5fa72332176e3',
                    'label' => 'Module Fields',
                    'name' => 'module_fields',
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
                            'key' => 'field_5fa72340176e4',
                            'label' => 'Desktop Background',
                            'name' => 'desktop_background',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'return_format' => 'array',
                            'preview_size' => 'full',
                            'library' => 'all',
                            'min_width' => '',
                            'min_height' => '',
                            'min_size' => '',
                            'max_width' => '',
                            'max_height' => '',
                            'max_size' => '',
                            'mime_types' => '',
                        ),
                        array(
                            'key' => 'field_5fa72394176e6',
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '50',
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
                            'key' => 'field_5fa723d4176e7',
                            'label' => 'Description',
                            'name' => 'description',
                            'type' => 'textarea',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '55',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'maxlength' => '',
                            'rows' => '',
                            'new_lines' => '',
                        ),
                        array(
                            'key' => 'field_5fa723dc176e8',
                            'label' => 'Button Text',
                            'name' => 'button_text',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '20',
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
                            'key' => 'field_5fba8ef716673',
                            'label' => 'End Date',
                            'name' => 'end_date',
                            'type' => 'date_picker',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '20',
                                'class' => '',
                                'id' => '',
                            ),
                            'display_format' => 'F j, Y',
                            'return_format' => 'Y-m-d',
                            'first_day' => 1,
                        ),
                        array(
                            'key' => 'field_5fa73bf4f8c88',
                            'label' => 'Text Position',
                            'name' => 'text_position',
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
                                'left' => 'Left',
                                'center' => 'Center',
                            ),
                            'allow_null' => 0,
                            'default_value' => '',
                            'layout' => 'horizontal',
                            'return_format' => 'value',
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

