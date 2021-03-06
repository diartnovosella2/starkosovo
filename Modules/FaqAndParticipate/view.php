
<?php 
    global $post;
    $jobId = $post->ID;
    $chooseDesign = $data['choose_design'] == 'FAQ' ? "faq" : "participate"; 
?> 

<div class="d-flex flex-column fp__<?= $chooseDesign; ?>">
    <?php if( $data['choose_design'] == 'FAQ') { ?>  
        <div class="fp__<?= $chooseDesign; ?>__left">
            <h2><?= $data['title']; ?></h2>
            <div class="fp__<?= $chooseDesign; ?>__left__subtitle d-flex flex-column">
                <span><?= $data['subtitle_of_faq'];?></span>
                <a href="<?= $data['subtitle_url_of_faq'];?>"><?= $data['subtitle_text_of_faq'];?></a>
            </div>
        </div>
    <?php } else {?>
        <h2 class="fp__<?= $chooseDesign; ?>__title mt-3 mt-md-5"><?= $data['title']; ?></h2>
    <?php } ?>
    <div class="d-flex flex-wrap flex-wrap fp__<?= $chooseDesign; ?>__repeater <?php if($chooseDesign == 'participate') { echo 'justify-content-between'; } else { echo 'justify-content-end';}?>">
        <?php foreach ($data['repeater'] as $index => $object) { ?>
            <div class="fp__<?= $chooseDesign; ?>__repeater__single">
                <?php if($chooseDesign == 'faq') {?>
                    <span clas="fp__<?= $chooseDesign; ?>__repeater__single__span"><?= $index+1; ?>.</span> <div> 
                <?php } ?>
                <h2 class="fp__<?= $chooseDesign; ?>__repeater__single__title"><?= $object['title'];?></h2>
                <p  class="fp__<?= $chooseDesign; ?>__repeater__single__desc"><?= $object['description'];?></p>
                <?php if($chooseDesign == 'faq') {?></div> <?php } ?>
            </div>
        <?php } ?>
    </div>
    <?php if( $data['choose_design'] !== 'FAQ') { ?>  
        <div class="mb-3">
            <button class="apply__button mt-3"> 
                <?php if (strlen($data['register_url']) !== 0 ) { ?>
                    <a href="<?= $data['register_url'];?>"><?= $data['register_text'];?></a>
                <?php } else { ?>
                    <a href="<?= get_home_url(); ?>/registration-form/?id=<?= $jobId;?>">REGISTER NOW</a>
                <?php } ?>
            </button>   
        </div>
    <?php } ?>
</div>