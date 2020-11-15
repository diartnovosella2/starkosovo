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

add_action('init', 'addRegisterFileds');
function addRegisterFileds() {
    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group(array(
            'key' => 'group_5fab05b05b6a4',
            'title' => 'Registration Fields',
            'fields' => array(
                array(
                    'key' => 'field_5fab05bca662b',
                    'label' => 'First Name',
                    'name' => 'first_name',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '25',
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
                    'key' => 'field_5fab05dfa662c',
                    'label' => 'Last Name',
                    'name' => 'last_name',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '25',
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
                    'key' => 'field_5fab05e5a662d',
                    'label' => 'Date of birth',
                    'name' => 'date_of_birth',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '25',
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
                    'key' => 'field_5fab05eba662e',
                    'label' => 'Phone Number',
                    'name' => 'phone_number',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '25',
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
                    'key' => 'field_5fab05f8a662f',
                    'label' => 'Email',
                    'name' => 'email',
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
                    'key' => 'field_5fab05fea6630',
                    'label' => 'Degree',
                    'name' => 'degree',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '30',
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
                    'key' => 'field_5fab0605a6631',
                    'label' => 'Department',
                    'name' => 'department',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '30',
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
                    'key' => 'field_5fab060ba6632',
                    'label' => 'University Details',
                    'name' => 'university_details',
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
                            'key' => 'field_5fab06bda6637',
                            'label' => 'Registered Year',
                            'name' => 'registered_year',
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
                            'key' => 'field_5fab0657a6633',
                            'label' => 'Year of studies',
                            'name' => 'year_of_studies',
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
                            'key' => 'field_5fab066ea6634',
                            'label' => 'Exams passed',
                            'name' => 'exams_passed',
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
                            'key' => 'field_5fab0689a6635',
                            'label' => 'English Level',
                            'name' => 'english_level',
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
                            'key' => 'field_5fab0690a6636',
                            'label' => 'Average Grade',
                            'name' => 'average_grade',
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
                    ),
                ),
                array(
                    'key' => 'field_5fab06e900923',
                    'label' => 'Does your father work?',
                    'name' => 'father_work',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '35',
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
                    'key' => 'field_5fab070200924',
                    'label' => 'Does your mother work?',
                    'name' => 'mother_work',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '35',
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
                    'key' => 'field_5fab071200925',
                    'label' => 'Where did you hear about Star Work & Travel USA?',
                    'name' => 'star_work_info',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '30',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'registration',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'acf_after_title',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
    endif;
}

// Localize Script for JS
wp_register_script( 'registerForm', get_stylesheet_directory_uri() . '/assets/js/registerForm.js', array('jquery') );
wp_localize_script( 'registerForm', 'script_object', array('ajax_url' => admin_url('admin-ajax.php')) );
wp_enqueue_script( 'registerForm' );


// Add these action so JS can see these functions
add_action('wp_ajax_populate_register_fields', 'populate_register_fields');
add_action('wp_ajax_nopriv_populate_register_fields', 'populate_register_fields');

function populate_register_fields() {
    $new_post = array(
        'post_title' => 'Registration Form ' . $_GET['firstName'] . ' ' . $_GET['lastName'],
        'post_date' => date('Y-m-d H:i:s'),
        'post_type' => 'registration',
        'post_status' => 'publish'
    );
    $post_id = wp_insert_post($new_post);

    $registerFields = [ 
        'first_name',  'last_name', 'date_of_birth', 'phone_number', 
        'email', 'degree', 'department', 'university_details_registered_year', 
        'university_details_year_of_studies', 'university_details_english_level', 
        'university_details_average_grade', 'university_details_exams_passed', 
        'father_work', 'mother_work', 'star_work_info', 
    ];
    $registerFieldsArray = [
        $_GET['firstName'], $_GET['lastName'], $_GET['dateOfBirth'], $_GET['phoneNumber'], 
        $_GET['email'], $_GET['university'], $_GET['department'], $_GET['yearOfUni'], 
        $_GET['yearOfStudies'], $_GET['englishLevel'], $_GET['avgGrade'], $_GET['numberOfExams'], 
        $_GET['father_work'], $_GET['mother_work'], $_GET['starWorkInfo']
    ];
    foreach ($registerFields as $key => $value) {
        update_post_meta($post_id, $value, $registerFieldsArray[$key]);
    }
    wp_send_json_success( array('data' => 'success' ) , 200);
    wp_die();
}


function article_postype_fields(){
    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_5fb03da237cc6',
            'title' => 'Articles Fields',
            'fields' => array(
                array(
                    'key' => 'field_5fb03dc97d2ad',
                    'label' => 'Content',
                    'name' => 'content',
                    'type' => 'wysiwyg',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'tabs' => 'all',
                    'toolbar' => 'full',
                    'media_upload' => 1,
                    'delay' => 0,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'article',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'acf_after_title',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
        
    endif;
}

add_action('init', 'article_postype_fields');


function gallery_fields(){
    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_5fb036e9e78c0',
            'title' => 'Gallery Module Fields',
            'fields' => array(
                array(
                    'key' => 'field_5fb03c9badc79',
                    'label' => 'Picture',
                    'name' => 'picture',
                    'type' => 'gallery',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'preview_size' => 'full',
                    'insert' => 'append',
                    'library' => 'all',
                    'min' => '',
                    'max' => '',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'acf-options-gallery',
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
        ));
        
    endif;
}

add_action('init', 'gallery_fields');


function short_content($content, $len){
    if (strlen($content) > $len){
      $content = substr($content, 0, $len);
      $content = explode(' ', $content);
      array_pop($content); // remove last word from array
      $content = implode(' ', $content);
    } 
    return $content;
}
  

function register_menus () {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }
add_action( 'init', 'register_menus' );
  