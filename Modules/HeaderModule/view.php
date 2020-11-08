
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
$remaining_days = $data['module_fields']['remaining_days'];
$text_position = $data['module_fields']['text_position'];

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
                    <span><?= $remaining_days ?> days left to apply</span>
                </div>
            </div>
        </div>
    </div>
</div>

