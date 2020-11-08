
<?php
/**
 * Place HTML here.
 *
 * Make use of Helper functions image() and link() to render images
 * and anchor HTML elements.
 */ 
    $styleClass = ($data['choose_design'] === 'Centered') ? "centered" : (( $data['choose_design'] === 'Between') ? "between" : "with__repeater");
?>

<div class="d-flex text__<?= $styleClass; ?> py-3">
    <?php if($styleClass === 'centered') { ?>
        <div class="d-flex flex-column align-items-center text-center text__<?= $styleClass; ?>__content">
            <h2><?= $data['title']; ?></h2>
            <p><?= $data['description']; ?></p>
            <a href="<?= $data['link_url']; ?>"> <?= $data['link_text']; ?></a>
        </div>
        <img class="text__<?= $styleClass; ?>__content__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/world.svg" alt="World"/>
    <?php } else if($styleClass === 'between') {?>
        <div class="d-flex justify-content-lg-between align-items-center flex-column flex-lg-row text__<?= $styleClass; ?>__content">
            <h2><?= $data['title']; ?></h2>
            <p><?= $data['description']; ?></p>
        </div>
    <?php } else {?>
        <div class="d-flex flex-column justify-content-between text__<?= $styleClass; ?>__content">
            <h2><?= $data['title']; ?></h2>
            <p><?= $data['description']; ?></p>
            <a href="<?= $data['link_url']; ?>"> <?= $data['link_text']; ?></a>
        </div>
        <div class="position-relative text__<?= $styleClass; ?>__right d-flex flex-column justify-content-center">
            <?php foreach ($data['repeater'] as $desc) { ?>
                <p><?= $desc['description']; ?></p>
            <?php } ?>
            <img class="text__<?= $styleClass; ?>__content__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/world.svg" alt="World"/>
        </div>
    <?php } ?>
</div>