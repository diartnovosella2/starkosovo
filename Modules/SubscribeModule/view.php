
<?php
/**
 * Place HTML here.
 *
 * Make use of Helper functions image() and link() to render images
 * and anchor HTML elements.
 */
$title = $data['module_title'];
$description = $data['module_description'];
?>

<div class="subscribe-module">
    <div class="title">
        <p><?= $title ?></p>
    </div>
    <div class="description">
        <p><?= $description ?></p>
    </div>
    <div class="sub-wrapper">
        <div class="subscribe-form">
            <?php 
                echo do_shortcode('[email-subscribers-form id="2"]');    
            ?>
        </div>
    </div>
</div>