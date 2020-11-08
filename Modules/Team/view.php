
<?php
/**
 * Place HTML here.
 *
 * Make use of Helper functions image() and link() to render images
 * and anchor HTML elements.
 */
?>
<div class="team d-flex flex-column justify-content-center align-items-center">
    <div class="team__description text-center">
        <?= $data['description']; ?>
    </div>
    <div class="team__members d-flex flex-wrap justify-content-around justify-content-lg-between my-5 w-100">
        <?php foreach ($data['repeater'] as $object) { ?>
            <div class="team__members__single">
                <img src="<?= $object['image']['url'];?>" alt="<?= $object['image']['name'];?>">
                <h2><?= $object['name'];?></h2>
                <p><?= $object['job_position'];?></p>
            </div>
        <?php } ?>
    </div>
    <div class="team__description text-center">
        <?= $data['other_description']; ?>
    </div>
</div>