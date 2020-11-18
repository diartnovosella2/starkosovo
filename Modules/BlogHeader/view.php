<?php 
    $article_page = $data['module_name'] == "Single Article";
    $module_container = '';
    $module_header = '';
    if($article_page): 
        $module_container = 'single-article-module';
        $module_header = 'single-article';
    endif;

?>

<div class="blog-header-module <?= $module_container ?>">
    <div class="blog-header">
        <div class="module-info <?= $module_header ?>">
            <div class="module-title">
                <p><?= $data['title']?></p>
            </div>
            <div class="module-description">
                <p><?= $data['description']?></p>
            </div>
        </div>
        <?php if(!$article_page): ?>
        <div class="sub-wrapper">
            <div class="subscribe-form">
                <div class="subscribe-input">
                    <input type="text" placeholder="Email Address">
                </div>
                <div class="single-p-m">
                    <p>We hate spam as much as you do!</p>
                </div>
                <div class="header-button">
                    <a href="#">
                        <div class="subsribe-btn">
                            <span>Subscribe</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="single-p-d">
                <p>We hate spam as much as you do!</p>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <div class="background-img">
        <img src="<?=$data['background']['url']?>" alt="bg-img">
    </div>
    <?php if(!$article_page): ?>
        <div class="article-container">
            <div class="featured-holder">
                <span>Featured</span>
            </div>
            <?php 
                $article_id = $data['article'][0];
                $article_title = get_the_title($article_id);
                $article_description = get_field('content', $article_id);
                $article_thumbnail = get_the_post_thumbnail($article_id);
                $article_permalink = get_permalink($article_id);
            ?>
            <div class="article-title">
                <span> <?= $article_title ?></span>
            </div>
            <div class="article-description">
                <span><?= short_content($article_description, 115); ?>... </span>
            </div>
            <div class="article-btn">
                <a href="<?= $article_permalink ?>">
                    <div class="read-more-btn">
                        <span>Read article</span>
                    </div>
                </a>
            </div>
        </div>
    <?php endif;?>
 </div>

