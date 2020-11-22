
<?php
/**
 * Place HTML here.
 *
 * Make use of Helper functions image() and link() to render images
 * and anchor HTML elements.
 */
       
$desktop_bg = $data['module_fields']['desktop_background']['url'];
$title = $data['module_fields']['title'];
$description = $data['module_fields']['description'];
$button_text = $data['module_fields']['button_text'];
$text_position = $data['module_fields']['text_position'];
$end_date = $data['module_fields']['end_date'];

?>
<div class="header-module">
  
    <div class="background-img">
        <img class="background-img-picture" src="<?= $desktop_bg ?>" alt="desktop-bg">
        <div class="clouds-wrapper">
            <img class="img-clouds" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clouds.svg" alt="clouds">
        </div>
    </div>
    <div class="module-container">
        <div class="text-wrapper text-<?= $text_position; ?>">
            <div class="title">
                <?= $title ?>
            </div>
            <div class="description">
                <?= $description ?>
            </div>
            <div class="btn-txt-wrapper">
                <div class="aff-button">
                    <a href="#">
                        <div class="get-started-btn">
                            <span><?= $button_text?></span>
                        </div>
                    </a>
                </div>
                <div class="remaining-days">
                    <?php 
                        $current_date = date("Y-m-d");
                        $date1 = new DateTime($current_date); 
                        $date2 = new DateTime($end_date);
                        $diff = $date2->diff($date1)->format("%a");
                        $days = intval($diff);   //rounding days
                    ?>
                    <span><?= $days; ?> days left to apply</span>
                </div>
            </div>
        </div>
    </div>
</div>

