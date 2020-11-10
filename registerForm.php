<?php 
$registerFields = [ 
    'first_name',  'last_name', 'date_of_birth', 'phone_number', 
    'email', 'degree', 'department', 'university_details_registered_year', 
    'university_details_year_of_studies', 'university_details_english_level', 
    'university_details_average_grade', 'university_details_exams_passed', 
    'father_work', 'mother_work', 'star_work_info', 
];

add_action('init', 'populateRegisterFields');

function populateRegisterFields( $firstName, $lastName, $dateOfBirth, $phoneNumber, 
$email, $degree, $department,  $uniRegisterYear, $uniYearOfStudies,  $uniEngLevel, 
$uniAvgGrade, $uniExamsPassed, $fatherWork, $motherWork, $starWorkInfo ) {

    $new_post = array(
        'post_title' => 'Registration Form ' . $firstName ' ' . $lastName,
        'post_date' => date('Y-m-d H:i:s'),
        'post_type' => 'registration',
    );
    // $post_id = wp_insert_post($new_post);

    $populateRegisterFields = [ 
        $firstName, 
        $lastName, 
        $dateOfBirth, 
        $phoneNumber, 
        $email, 
        $degree, 
        $department, 
        $uniRegisterYear, 
        $uniYearOfStudies, 
        $uniEngLevel, 
        $uniAvgGrade, 
        $uniExamsPassed, 
        $fatherWork, 
        $motherWork, 
        $starWorkInfo 
    ];

    foreach ($registerFields as $key => $value) {
        update_post_meta($post_id, $value, $populateRegisterFields[$key]);
    }
}