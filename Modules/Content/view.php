
<?php
/**
 * Place HTML here.
 *
 * Make use of Helper functions image() and link() to render images
 * and anchor HTML elements.
 */
    $chooseStyle   = $data['choose_style'];
    $styleClass    = ($chooseStyle === 'Get Started') ? "get__started pt-2 pt-md-5" : (( $chooseStyle === "Success Story" )  ? "success__story pt-2 pt-md-2" : "register");
    $styleClassTitle = ($chooseStyle === 'Get Started') ? "get__started" : (( $chooseStyle === "Success Story" )  ? "success__story" : "register");
    $imagePosition = $data['choose_position'] == "Left" ? "row-reverse" : "row";
?>

<div class="content d-flex flex-column flex-md-<?= $imagePosition;?>">
    <div class="content__left <?= $styleClass;?> content__left d-flex flex-column justify-content-between">
        <?php if($chooseStyle === 'Get Started')  { ?>
            <h2 class="content__left__title__<?= $styleClassTitle;?> px-2 px-lg-0 pl-0 pl-lg-5"><?= $data['title']; ?></h2>
            <div class="d-flex flex-wrap px-2 px-lg-0 pl-0 pl-lg-5">
                <?php foreach ($data['forms'] as $object) : ?>
                    <div class="content__left__form">
                        <p class="content__left__form__title"><?= $object['title']; ?></p> 
                        <p class="content__left__form__description"><?= $object['description']; ?></p> 
                        <a class="content__left__form__url" href="<?= $object["url"];?> ">See How</a>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php } else { ?>
                <h3 class="content__left__topDesc__<?= $styleClassTitlez; ?> d-flex justify-content-end pl-2 pl-lg-5 pr-3 mb-0">SUCCESS STORY</h3>
                <div class="content__left__description px-2 px-lg-5 ">
                    <h2 class="content__left__title__<?= $styleClass;?> pr-0 pr-lg-5 mb-2 mb-lg-3"><?= $data['title']; ?></h2>
                    <?= $data['content_description'];?>
                </div>
        <?php } ?>
                
        <div class="content__left__footer px-2 px-lg-0 pl-0 pl-lg-5 py-3">
            <p class="content__left__footer__title">
                <?= $data['footer_title']; ?> 
                <a class="content__left__footer__desc" href="tel:<?= $data['footer_description']; ?>"><?= $data['footer_description']; ?></a>
            </p>
        </div>
    </div>

    <div class="content__right">
        <img src="<?= $data['image']['url']; ?>" alt="<?= $data['image']['title']; ?>">
    </div>
</div>