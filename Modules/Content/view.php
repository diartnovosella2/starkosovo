
<?php
/**
 * Place HTML here.
 *
 * Make use of Helper functions image() and link() to render images
 * and anchor HTML elements.
 */
    global $post;
    $jobId = $post->ID;
    $chooseStyle     = $data['choose_style'];
    $styleClass      = ($chooseStyle === 'Get Started') ? "get__started pt-2 pt-md-5" : (( $chooseStyle === "Success Story" )  ? "success__story pt-2 pt-md-2" : "register");
    $styleClassTitle = ($chooseStyle === 'Get Started') ? "get__started" : (( $chooseStyle === "Success Story" )  ? "success__story" : "register");
    $imagePosition   = $data['choose_position'] == "Left" ? "row-reverse" : "row";
    $columnReverse   = ($chooseStyle === 'Success Story' || $chooseStyle === 'Register') ? "flex-column-reverse" : "flex-column";
    $bgColor         = strlen($data['bg_color']) != 0 ? $data['bg_color'] : 'default' ;
    $toggleFooter    = strlen($data['footer_title']) != 0 ? "justify-content-between" : "justify-content-center";
    $toggleMargin    = strlen($data['footer_title']) != 0 ? "mt-2 mt-lg-5" : "mt-2";
    $buttonMargin    = strlen($data['footer_title']) == 0 ? '' : 'mb-2 mb-md-3';
?>

<?php if($chooseStyle != 'Wysiwyg Editor'){ ?>
<div class="content d-flex <?= $columnReverse; ?> flex-md-<?= $imagePosition;?>">
    <div class="content__left <?= $styleClass;?> content__left d-flex flex-column <?= $toggleFooter; ?> bg_<?= $bgColor; ?>">
        <?php if($chooseStyle === 'Get Started')  { ?>
            <h2 class="content__left__title__<?= $styleClassTitle;?> pl-0 pl-lg-5"><?= $data['title']; ?></h2>
            <div class="d-flex flex-wrap pl-0 pl-lg-5">
                <?php foreach ($data['forms'] as $object) : ?>
                    <div class="content__left__form d-flex flex-column justify-content-between">
                        <div>
                            <p class="content__left__form__title"><?= $object['title']; ?></p> 
                            <p class="content__left__form__description"><?= $object['description']; ?></p> 
                        </div>
                        <a class="content__left__form__url" href="<?= $object["url"];?> ">See How</a>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php } else if($chooseStyle === 'Success Story') { ?>
                <h3 class="content__left__topdesc__<?= $styleClassTitle; ?> d-none d-md-flex justify-content-end pl-2 pl-lg-5 pr-3 mb-0">SUCCESS STORY</h3>
                <div class="content__left__description px-2 px-lg-5 pb-5">
                    <h2 class="content__left__title__<?= $styleClass;?> pr-0 pr-lg-5 mb-4 mb-lg-3 mt-5 mt-lg-3"><?= $data['title']; ?></h2>
                    <div class="mb-3 mb-md-1">
                        <?= $data['content_description'];?>
                        <h3 class="content__left__topdesc__<?= $styleClassTitle; ?> d-flex justify-content-end pl-0 pl-lg-5 pr-0 mb-0 mt-0 d-block d-md-none float-right">SUCCESS STORY</h3>
                    </div>
                </div>
        <?php } else {?>
            <div class="content__left__description content__left__description__register px-2 px-lg-5 <?= $toggleMargin; ?> mb-5 mb-lg-0">
                <h2 class="content__left__title__<?= $styleClass;?> pr-0 pr-lg-5 mb-4 mb-lg-3"><?= $data['title']; ?></h2>
                <?= $data['content_description'];?>
                <?php if (strlen($data['register_button_text']) !== 0) { ?>
                    <button class="apply__button mt-3 <?= $buttonMargin; ?>"> 
                        <?php if( strlen($data['register_button_url']) !== 0) {?>
                            <a href="<?= $data['register_button_url'];?>/?id=<?= $jobId;?>"><?= $data['register_button_text'];?></a>
                        <?php } else {?>
                            <a href="<?= get_home_url(); ?>/registration-form/?id=<?= $jobId;?>"><?= $data['register_button_text'];?></a>
                        <?php }?>
                    </button>
                <?php } ?>
                    <?php if( strlen($data['other_url']) !== 0){?>
                        <a class="apply__button__other" href="<?= $data['other_url'];?>"><?= $data['other_text'];?></a>
                <?php } ?>
            </div>
        <?php } ?>
        <?php if (strlen($data['footer_title']) !== 0) { ?>        
            <div class="content__left__footer px-2 px-lg-0 pl-0 pl-lg-5 py-3 <?php if($styleClass == 'register'){ ?>register__footer__container <?php } ?>">
                <p class="content__left__footer__title <?php if($chooseStyle === 'Success Story') {?> d-flex flex-column flex-lg-row <?php } ?>">
                    <span <?php if($styleClass == 'register'){ ?>class="register__footer__container__title" <?php } ?>><?= $data['footer_title']; ?></span>
                    <a class="content__left__footer__desc" href="tel:<?= $data['footer_description']; ?>"><?= $data['footer_description']; ?></a>
                </p>
            </div>
        <?php } ?>
    </div>

    <div class="content__right text-center text-md-left">
        <img src="<?= $data['image']['url']; ?>" alt="<?= $data['image']['title']; ?>">
    </div>
</div>

<?php } else { ?>
    <div class="content-wrapper">
        <?= $data['wysiwyng_editor']?> 
    </div>
<?php } ?>