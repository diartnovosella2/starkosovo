<?php 
    /* Template Name: Job Application */
    get_header(); 
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type'      => 'application',
        'post_status'    => 'publish',
        'posts_per_page' =>  30,
        'orderby'        => 'publish_date',
        'order'          => 'DESC',
        'fields'         => 'ids',
        'paged' => $paged
    );

    $query = new WP_Query($args);
    $total = $query->max_num_pages;
    $posts_array = (array)$query;
    $jobs = $posts_array['posts'];

    $argsForFilters = array(
        'post_type'      => 'application',
        'post_status'    => 'publish',
        'posts_per_page' =>  -1,
        'orderby'        => 'publish_date',
        'order'          => 'DESC',
        'fields'         => 'ids',
    );
    
    $queryWithFilters = new WP_Query($argsForFilters);
    $posts_array = (array)$queryWithFilters;
    $jobsFilter = $posts_array['posts'];

    $statesArray   = [];
    $cityArray     = [];
    $employeeArray = [];
    $priceArray    = [];
    $jobPositions  = [];

    foreach($jobsFilter as $jobId) { 
        $price        = get_field('price_per_hour', $jobId);
        $city         = get_field('city', $jobId);
        $state        = get_field('state', $jobId);
        $employee     = get_field('job_name', $jobId);
        $jobPosition  = strtolower(get_field('job_position', $jobId));
        
        $priceArray[]      = $price;
        $statesArray[]   = $state;
        $cityArray[]     =  $city;
        $employeeArray[] = $employee;
        $jobPositions[]  = ucwords($jobPosition);
    }

    $priceArray = array_unique($priceArray);
    $statesArray = array_unique($statesArray);
    $cityArray = array_unique($cityArray);
    $employeeArray = array_unique($employeeArray);
    $jobPositions = array_unique($jobPositions);
    asort($priceArray);
    asort($statesArray);
    asort($cityArray);
    asort($employeeArray);
    asort($jobPositions);
?>

<div class="jobs">
    <div class="container">
        <div class="jobs__title mb-4">
            <h2>AVAILABLE JOBS</h2>
            <p>List of available jobs to apply.</p>
        </div>
        <div class="jobs__filters mb-4">
            <button class="filters__toggle filter_slide">
                Filter Results
                <svg class="arrow_filter" width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 0.5L4 4L0.5 7.5" stroke="white"/>
                </svg>
            </button>
            <span class="filters__jobs__available text-center text-md-left d-block mb-0 mb-md-2"></span>
            <form id="filterJobs">
                <div class="filterJobs__container flex-column flex-lg-row">
                    <div class="jobs__filters__select jobs__filters__location">
                        <p>Location</p>
                        <div class="d-flex my-2">
                            <select name="city" id="city">
                                <option selected>City</option>
                                <?php foreach($cityArray as $city) {  ?>
                                    <option value="<?= $city; ?>"><?= $city; ?></option>
                                <?php } ?>
                            </select>
                            <select name="state" id="state">
                                <option selected>State</option>
                                <?php foreach($statesArray as $state) {  ?>
                                    <option value="<?= $state; ?>"><?= $state; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="jobs__filters__select jobs__filters__hours">
                        <p>Employee</p>
                        <div class="d-flex my-2">
                            <select name="employee" id="employee">
                                <option selected>Employee</option>
                                <?php foreach($employeeArray as $employee) {  ?>
                                    <option value="<?= $employee; ?>"><?= $employee; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="jobs__filters__select jobs__filters__position">
                        <p>Select Position</p>
                        <div class="d-flex my-2">
                            <select name="job_name" id="job_name">
                                <option selected>Job Position</option>
                                <?php foreach($jobPositions as $jobPosition) {  ?>
                                    <option value="<?= $jobPosition; ?>"><?= $jobPosition; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="jobs__filters__select jobs__filters__salary">
                        <p>Salary/hour</p>
                        <div class="d-flex my-2">
                            <select name="salary" id="salary">
                                <option selected>Hours</option>
                                <?php foreach($priceArray as $price) {  ?>
                                    <option value="<?= $price; ?>"><?= $price; ?><span> $</span></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="jobs__filters__submit d-flex justify-content-center align-items-center">
                        <button class="mt-2"> 
                            <input type="submit" value="FILTER" id="submitvals">
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="jobs__container">
        <div class="filter__jobs container">
            <?php foreach($jobs as $jobId) { 
                $otherDetails = get_field('other_details', $jobId);
                $description  = get_field('description', $jobId);
                $price     = get_field('price_per_hour', $jobId);
                $thumbnail = get_the_post_thumbnail($jobId);
                $jobName   = get_field('job_name', $jobId);
                $city      = get_field('city', $jobId);
                $state     = get_field('state', $jobId);
                $subtitle  = get_field('subtitle', $jobId);
                $jobTitle  = get_the_title($jobId);
                $positions_available = get_field('positions_available', $jobId);
            ?> 
                <div class="jobs__container__single d-flex flex-column flex-md-row justify-content-between mb-2 p-3">
                    <div class="jobs__container__single__data d-flex align-items-center">
                        <div class="jobs__container__single__data__img">
                            <?= $thumbnail;?>
                        </div>
                        <div>
                            <p class="job__name"><?= $jobName;?></p>
                            <h2 class="job__title"><?= $jobTitle;?></h2>
                            <div class="d-flex flex-column mt-2 job__locationPrice">
                                <div class="d-flex mb-1">
                                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 0C3.64 0 0.90625 2.73375 0.90625 6.09375C0.90625 7.42344 1.32625 8.68687 2.12188 9.74687L6.62437 15.811C6.63562 15.8257 6.65281 15.8313 6.66531 15.8444C6.89031 16.0853 7.215 16.0247 7.37531 15.811C8.67188 14.081 11.0484 10.85 11.9622 9.63125C11.9622 9.63125 11.9625 9.63031 11.9628 9.62969L11.9684 9.62219C12.7047 8.58781 13.0938 7.36781 13.0938 6.09375C13.0938 2.73375 10.36 0 7 0ZM7 9.38125C5.19094 9.38125 3.7125 7.90281 3.7125 6.09375C3.7125 4.28469 5.19094 2.80625 7 2.80625C8.80906 2.80625 10.2875 4.28469 10.2875 6.09375C10.2875 7.90281 8.80906 9.38125 7 9.38125Z" fill="#399EAC"/>
                                    </svg>
                                    <p class=" ml-2"><?= $city;?>, <?= $state; ?></p>
                                </div>
                                <div class="d-flex">
                                    <svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.5 12.4368C9.5 10.043 7.45368 8.09538 4.93842 8.09538C3.86923 8.09546 3.09328 7.5584 3.09328 6.81855C3.09328 6.11448 3.63837 5.54164 4.30835 5.54164C4.98385 5.54164 5.86371 5.61825 7.26833 6.18657C8.02631 6.49325 8.87995 6.1026 9.1748 5.31387C9.46966 4.52522 9.09409 3.63712 8.33597 3.33044C7.60479 3.03464 6.96728 2.84065 6.4071 2.71294V1.53226C6.4071 0.685992 5.74773 0 4.93429 0C4.12086 0 3.46148 0.685992 3.46148 1.53226V2.56776C1.57202 2.9771 0.147665 4.7274 0.147665 6.81855C0.147665 9.29353 2.20724 11.16 4.93842 11.16C5.81444 11.16 6.55438 11.7447 6.55438 12.4369C6.55438 13.1171 5.94641 13.7138 5.25338 13.7138C4.71264 13.7138 3.35589 13.5075 2.01725 12.9539C1.26148 12.6414 0.405039 13.0253 0.104586 13.8117C-0.195941 14.5981 0.173291 15.4891 0.929136 15.8016C1.78204 16.1544 2.67184 16.406 3.46148 16.5655V17.4677C3.46148 18.314 4.12086 19 4.93429 19C5.74773 19 6.4071 18.314 6.4071 17.4677V16.6121C7.08054 16.4149 7.70288 16.0465 8.22153 15.5264C9.04593 14.6999 9.5 13.6026 9.5 12.4368Z" fill="#399EAC"/>
                                    </svg>
                                    <p class="ml-2"><?= $price;?>/h</p>
                                </div>
                            </div>
                            <?php if( !empty($otherDetails) ) { ?>
                                <div class="positions">
                                    <span><?= $positions_available ?> positions avaliable</span>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if( !empty($subtitle) || !empty($description) ) { ?>
                        <div class="seperator"></div>
                        <div class="jobs__container__single__text">
                            <p class="jobs__container__single__text__sub" ><?= $subtitle; ?></p>
                            <div class="jobs__container__single__text__desc">
                                <?= $description; ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if( !empty($otherDetails) ) { ?>
                        <div class="seperator"></div>
                        <div class="jobs__otherDetails desktop-details"> 
                            <?php foreach ($otherDetails as $details) { ?>
                                <div class="jobs__otherDetails__single d-flex align-items-center mb-1"> 
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.17621 9.05866C5.95798 9.05784 5.74921 8.97054 5.59562 8.81572L4.36033 7.58044C4.03874 7.25885 4.03874 6.73672 4.36033 6.41516C4.68192 6.0936 5.20405 6.09357 5.52562 6.41516L6.22149 7.11103L8.52326 5.13867C8.90085 4.88503 9.41267 4.9859 9.6659 5.36349C9.87631 5.67726 9.84667 6.09354 9.59385 6.37395L6.71149 8.84454C6.56452 8.97797 6.3747 9.05413 6.17621 9.05866Z" fill="#399EAC"/>
                                        <path d="M7 14C3.13395 14 0 10.8661 0 7C0 3.13395 3.13395 0 7 0C10.8661 0 14 3.13395 14 7C14 10.8661 10.8661 14 7 14ZM7 1.64705C4.04354 1.64705 1.64705 4.04354 1.64705 7C1.64705 9.95646 4.04354 12.3529 7 12.3529C9.95646 12.3529 12.3529 9.95646 12.3529 7C12.3529 4.04354 9.95646 1.64705 7 1.64705Z" fill="#399EAC"/>
                                    </svg>
                                    <p><?= $details['name']; ?></p> 
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <div class="mobile-trip">
                        <button class="apply__button"> 
                            <a href="<?= get_home_url(); ?>/registration-form/?id=<?= $jobId;?>">APPLY NOW</a>
                        </button>
                        <?php if( !empty($otherDetails) ) { ?>
                            <div class="jobs__otherDetails mobile-details"> 
                                <?php foreach ($otherDetails as $details) { ?>
                                    <div class="jobs__otherDetails__single d-flex align-items-center mb-1"> 
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.17621 9.05866C5.95798 9.05784 5.74921 8.97054 5.59562 8.81572L4.36033 7.58044C4.03874 7.25885 4.03874 6.73672 4.36033 6.41516C4.68192 6.0936 5.20405 6.09357 5.52562 6.41516L6.22149 7.11103L8.52326 5.13867C8.90085 4.88503 9.41267 4.9859 9.6659 5.36349C9.87631 5.67726 9.84667 6.09354 9.59385 6.37395L6.71149 8.84454C6.56452 8.97797 6.3747 9.05413 6.17621 9.05866Z" fill="#399EAC"/>
                                            <path d="M7 14C3.13395 14 0 10.8661 0 7C0 3.13395 3.13395 0 7 0C10.8661 0 14 3.13395 14 7C14 10.8661 10.8661 14 7 14ZM7 1.64705C4.04354 1.64705 1.64705 4.04354 1.64705 7C1.64705 9.95646 4.04354 12.3529 7 12.3529C9.95646 12.3529 12.3529 9.95646 12.3529 7C12.3529 4.04354 9.95646 1.64705 7 1.64705Z" fill="#399EAC"/>
                                        </svg>
                                        <p><?= $details['name']; ?></p> 
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <?php 
                if ( $total > 1 )  {
                    // Get the current page
                    if ( !$current_page = get_query_var('paged') )
                        $current_page = 1;

                    $format = empty( get_option('permalink_structure') ) ? '&page=%#%' : 'page/%#%/';
                    echo paginate_links(array(
                        'base'      => get_pagenum_link(1) . '%_%',
                        'format'    => $format,
                        'current'   => $current_page,
                        'total'     => $total,
                        'mid_size'  => 4,
                        'type'      => 'list',
                        'prev_text' => '<span class="previous_blog">Previous</span>',
                        'next_text' => '<span class="next_blog">Next</span>'
                    ));
                } 
            ?>
        </div>
    </div>
</div>

<?php get_footer();
