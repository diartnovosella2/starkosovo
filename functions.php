<?php

// require __DIR__ . '/vendor/autoload.php';

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
  
add_action( 'init', 'register_menus' );
function register_menus () {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
        'blog-menu' => __( 'Blog Menu' ),
        'social-media' => __( 'Social Media' )
      )
    );
}

add_action('init', 'addRegisterFileds');
function addRegisterFileds() {
    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group(array(
            'key' => 'group_5fab05b05b6a4',
            'title' => 'Registration Fields',
            'fields' => array(
                array(
                    'key' => 'field_5fbc1164d93f7',
                    'label' => 'Job Name',
                    'name' => 'job_name',
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
                    'key' => 'field_5fbc116bd93f8',
                    'label' => 'Job Url',
                    'name' => 'job_url',
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
                    'key' => 'field_5fab05bca662b',
                    'label' => 'First Name',
                    'name' => 'first_name',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '15',
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
                        'width' => '15',
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
                        'width' => '15',
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
                        'width' => '15',
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
                        'width' => '15',
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
                        'width' => '15',
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
                        'width' => '10',
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

add_action('init', 'gallery_fields');
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

add_theme_support( 'post-thumbnails', array( 'job') );

function short_content($content, $len){
    if (strlen($content) > $len){
      $content = substr($content, 0, $len);
      $content = explode(' ', $content);
      array_pop($content); // remove last word from array
      $content = implode(' ', $content);
    } 
    return $content;
}

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
    $jobTitle = isset($_GET['siteTitle']) ? $_GET['siteTitle'] : 'None';
    $jobUrl   = isset($_GET['siteUrl'])   ? $_GET['siteUrl']   : 'None';

    $registerFields = [ 
        'first_name',  'last_name', 'date_of_birth', 'phone_number', 
        'email', 'degree', 'department', 'university_details_registered_year', 
        'university_details_year_of_studies', 'university_details_english_level', 
        'university_details_average_grade', 'university_details_exams_passed', 
        'father_work', 'mother_work', 'star_work_info', 'job_name', 'job_url' 
    ];

    $registerFieldsArray = [
        $_GET['firstName'], $_GET['lastName'], $_GET['dateOfBirth'], $_GET['phoneNumber'], 
        $_GET['email'], $_GET['university'], $_GET['department'], $_GET['yearOfUni'], 
        $_GET['yearOfStudies'], $_GET['englishLevel'], $_GET['avgGrade'], $_GET['numberOfExams'], 
        $_GET['father_work'], $_GET['mother_work'], $_GET['starWorkInfo'], $jobUrl, $jobTitle
    ];

    $client = new \Google_Client();
    $client->setApplicationName('Google sheets and php');
    $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
    $client->setAccessType('offline');
    $client->setAuthConfig(__DIR__ . '/credentials.json');

    $service = new Google_Service_Sheets($client);
    // id e sheetit, duhesh me ja bo share edhe emailin qe e ki te credentials.json 
    $spreadsheetID = '12_JIBaJuBh2LkeRckzpmyUSY3tewO9yA2A7dMNbZj-o'; 


    $range = "Sheet1"; // emri i sheetit aty posht kur te hin ne google sheet 

    $values = [
        [
            $_GET['firstName'],
            $_GET['lastName'],
            $_GET['dateOfBirth'],
            $_GET['phoneNumber'],
            $_GET['email'],
            $_GET['university'],
            $_GET['department'],
            $_GET['yearOfUni'],
            $_GET['yearOfStudies'],
            $_GET['englishLevel'],
            $_GET['avgGrade'],
            $_GET['numberOfExams'],
            $_GET['father_work'],
            $_GET['mother_work'],
            $_GET['starWorkInfo'],
        ],
    ];

    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);

    $params = [
        'valueInputOption' => 'RAW'
    ];
 
    $insert = [
        "insertDataOption" => "INSERT_ROWS"
    ];

    $results = $service->spreadsheets_values->append(
        $spreadsheetID,
        $range,
        $body,
        $params,
        $insert
    );


    foreach ($registerFields as $key => $value) {
        update_post_meta($post_id, $value, $registerFieldsArray[$key]);
    }
    wp_send_json_success( array('data' => 'success' ) , 200);
    wp_die();
}

add_filter( 'posts_where', 'title_like_posts_where', 10, 2 );
function title_like_posts_where( $where, $wp_query ) {
    global $wpdb;
    if ( $post_title_like = $wp_query->get( 'post_title_like' ) ) {
        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( $wpdb->esc_like( $post_title_like ) ) . '%\'';
    }
    return $where;
}
// Add these action so JS can see these functions
add_action('wp_ajax_filter_jobs', 'filter_jobs');
add_action('wp_ajax_nopriv_filter_jobs', 'filter_jobs');

function filter_jobs() {
    $meta_args = array();
    
    $city     = isset($_GET['city'])     ? $_GET['city']     : null;
    $state    = isset($_GET['state'])    ? $_GET['state']    : null;
    $jobTitle = isset($_GET['job_name']) ? $_GET['job_name'] : null;
    $salary   = isset($_GET['salary'])   ? $_GET['salary']   : null;
    $employee = isset($_GET['employee']) ? $_GET['employee'] : null;

    $cityQuery   = $city     !== '' ? $meta_args[] = array('key' => 'city', 'value' => $city, 'compare' => 'LIKE')               : null;
    $stateQuery  = $state    !== '' ? $meta_args[] = array('key' => 'state', 'value' => $state, 'compare' => 'LIKE')             : null;
    $salaryQuery = $salary   !== '' ? $meta_args[] = array('key' => 'price_per_hour', 'value' => $salary, 'compare' => '=')      : null;
    $empQuery    = $employee !== '' ? $meta_args[] = array('key' => 'job_name', 'value' => $employee, 'compare' => 'LIKE')       : null;
    $jobQueru    = $jobTitle !== '' ? $meta_args[] = array('key' => 'job_position', 'value' => $jobTitle, 'compare' => 'LIKE')   : null;

    $args = array(
        'post_type'       => 'job',
        'post_status'     => 'publish',
        'posts_per_page'  =>  -1,
        'orderby'         => 'publish_date',
        'order'           => 'DESC',
        'fields'          => 'ids',
        'meta_query'	  => array(
            'relation'  => 'AND',
            $meta_args
        ),
    );

    $query = new WP_Query($args);
    $jobsArray = [];
    $filterJobs = [];

    foreach($query->posts as $jobId) { 
        $otherDetails = get_field('other_details', $jobId);
        $description  = get_field('description', $jobId);
        $price        = get_field('price_per_hour', $jobId);
        $thumbnail    = get_the_post_thumbnail($jobId);
        $jobName      = get_field('job_name', $jobId);
        $city         = get_field('city', $jobId);
        $state        = get_field('state', $jobId);
        $subtitle     = get_field('subtitle', $jobId);
        $jobTitle     = get_the_title($jobId);

        $filterJobs['thumbnail']    = $thumbnail;
        $filterJobs['jobName']      = $jobName;
        $filterJobs['jobTitle']     = $jobTitle;
        $filterJobs['city']         = $city;
        $filterJobs['state']        = $state;
        $filterJobs['otherDetails'] = $otherDetails;
        $filterJobs['subtitle']     = $subtitle;
        $filterJobs['description']  = $description;
        $filterJobs['price']        = $price;
        $filterJobs['jobUrl']       = get_home_url() . '/registration-form/?id=' . $jobId;
        array_push($jobsArray, $filterJobs);
    };
    echo json_encode($jobsArray);
    wp_die();
}

add_action( 'save_post', 'my_save_post_function', 10, 3 );
function my_save_post_function( $post_id, $post, $update ) {
  if($post->post_type) {
    $getJobPosition = get_the_title($post_id);
    update_post_meta($post_id, 'job_position', $getJobPosition);
  }
}