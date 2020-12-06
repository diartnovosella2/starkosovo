
<?php
/**
 * Place HTML here.
 *
 * Make use of Helper functions image() and link() to render images
 * and anchor HTML elements.
 */
switch($data['selector']){
    case 'latest':
        $args = array(
            'post_type'      => 'application',
            'post_status'    => 'publish',
            'posts_per_page' => 3,
            'orderby'        => 'publish_date',
            'order'          => 'DESC',
        );
        $query = new \WP_Query($args);
        $jobs_array = (array)$query;
        $jobs = $jobs_array['posts'];
        break;
    case 'manual':
        $args = array(
            'post_type'      => 'application',
            'post_status'    => 'publish',
            'post__in'       => $data['manual_jobs'],
            'orderby'        => 'publish_date',
            'order'          => 'DESC'
        );

        $query = new \WP_Query($args);
        $jobs_array = (array)$query;
        $jobs = $jobs_array['query']['post__in'];
        break;
}
?>

<div class="avaliable-jobs-container">
    <div class="module-header">
        <div class="module-info">
            <div class="module-title">
                <span>AVALIABLE JOBS</span>
            </div>
            <div class="module-desc">
                <span>$20K - $40K  |  Fulltime</span>
            </div>
        </div>
        <div class="header-button">
            <a href="<?= home_url('/available-jobs');?>">
                <div class="jobs-btn">
                    <span>AVAILABLE JOBS</span>
                </div>
            </a>
        </div>
    </div>
    <div class="jobs-container">
        <?php foreach ($jobs as $job): 
            $job_id = $job->ID;
            $owner = get_field("job_name", $job_id); 
            $location = get_field("city", $job_id);
            $price = get_field("price_per_hour", $job_id);
            $positons = get_field("positions_avaliable", $job_id);
            $job_title = $job->post_title;
            $job_description = get_field('content', $job_id);
            $job_thumbnail = get_the_post_thumbnail($job_id);
            $job_permalink = get_permalink($job_id);
        ?>
        <div class="job-card">
            <div class="job-header">
                <a href="<?= $job_permalink ?>">
                    <div class="featured-img">
                        <?= $job_thumbnail?>
                    </div>
                </a>
            </div>
            <div class="job-body">
                <span class="owner"><?= $owner ?></span>
                <span class="title"><?= $job_title ?></span>
                <div class="location-div">
                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 0C3.64 0 0.90625 2.73375 0.90625 6.09375C0.90625 7.42344 1.32625 8.68687 2.12188 9.74687L6.62437 15.811C6.63562 15.8257 6.65281 15.8313 6.66531 15.8444C6.89031 16.0853 7.215 16.0247 7.37531 15.811C8.67188 14.081 11.0484 10.85 11.9622 9.63125C11.9622 9.63125 11.9625 9.63031 11.9628 9.62969L11.9684 9.62219C12.7047 8.58781 13.0938 7.36781 13.0938 6.09375C13.0938 2.73375 10.36 0 7 0ZM7 9.38125C5.19094 9.38125 3.7125 7.90281 3.7125 6.09375C3.7125 4.28469 5.19094 2.80625 7 2.80625C8.80906 2.80625 10.2875 4.28469 10.2875 6.09375C10.2875 7.90281 8.80906 9.38125 7 9.38125Z" fill="#399EAC"/>
                    </svg>
                    <span class="location"><?= $location ?></span>
                </div>
                <div class="price-div">
                    <svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.5 12.4368C9.5 10.043 7.45368 8.09538 4.93842 8.09538C3.86923 8.09546 3.09328 7.5584 3.09328 6.81855C3.09328 6.11448 3.63837 5.54164 4.30835 5.54164C4.98385 5.54164 5.86371 5.61825 7.26833 6.18657C8.02631 6.49325 8.87995 6.1026 9.1748 5.31387C9.46966 4.52522 9.09409 3.63712 8.33597 3.33044C7.60479 3.03464 6.96728 2.84065 6.4071 2.71294V1.53226C6.4071 0.685992 5.74773 0 4.93429 0C4.12086 0 3.46148 0.685992 3.46148 1.53226V2.56776C1.57202 2.9771 0.147665 4.7274 0.147665 6.81855C0.147665 9.29353 2.20724 11.16 4.93842 11.16C5.81444 11.16 6.55438 11.7447 6.55438 12.4369C6.55438 13.1171 5.94641 13.7138 5.25338 13.7138C4.71264 13.7138 3.35589 13.5075 2.01725 12.9539C1.26148 12.6414 0.405039 13.0253 0.104586 13.8117C-0.195941 14.5981 0.173291 15.4891 0.929136 15.8016C1.78204 16.1544 2.67184 16.406 3.46148 16.5655V17.4677C3.46148 18.314 4.12086 19 4.93429 19C5.74773 19 6.4071 18.314 6.4071 17.4677V16.6121C7.08054 16.4149 7.70288 16.0465 8.22153 15.5264C9.04593 14.6999 9.5 13.6026 9.5 12.4368Z" fill="#399EAC"/>
                    </svg>
                    <span class="cost">$<?= $price ?>/h</span>
                </div>
                <span class="positions"><?= $positons ?> positions available</span>
                <a href="<?= $job_permalink ?>">
                    <div class="view-details">
                        <span>View Details</span>
                    </div>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

