
<?php
/**
 * Place HTML here.
 *
 * Make use of Helper functions image() and link() to render images
 * and anchor HTML elements.
 */
switch($data['resources_preview']['selector']){
    case 'latest':
        $args = array(
            'post_type'      => 'article',
            'post_status'    => 'publish',
            'posts_per_page' => 4,
            'orderby'        => 'publish_date',
            'order'          => 'DESC',
        );
        $query = new \WP_Query($args);
        $articles_array = (array)$query;
        $articles = $articles_array['posts'];
        break;
    case 'manual':
        $args = array(
            'post_type'      => 'article',
            'post_status'    => 'publish',
            'post__in'       => $data['resources_preview']['manual_articles'],
            'orderby'        => 'publish_date',
            'order'          => 'DESC'
        );

        $query = new \WP_Query($args);
        $articles_array = (array)$query;
        $articles = $articles_array['query']['post__in'];
        break;
}

?>

<div class="resources-preview-container">
    <div class="resources-header">
        <div class="resources-info">
            <div class="resources-title">
                <span><?= $data['resources_preview']['title'] ?></span>
            </div>
            <div class="resources-description">
                <p><?= $data['resources_preview']['description'] ?></p>
            </div>
        </div>
        <div class="header-button">
            <a href="#">
                <div class="blog-btn">
                    <span>Blog</span>
                </div>
            </a>
        </div>
    </div>
    <div class="articles-container">
        <?php foreach ($articles as $article): 
            $article_id = $article->ID;
            $article_title = $article->post_title;
            $article_description = get_field('content', $article_id);
            $article_thumbnail = get_the_post_thumbnail($article_id);
            $article_permalink = get_permalink($article_id);
        ?>
        <div class="article-card">
            <div class="article-header">
                <a href="<?= $article_permalink ?>">
                    <div class="article-image">
                        <?= $article_thumbnail ?>
                    </div>
                </a>
            </div>
            <div class="article-body">
                <div class="article-title">
                    <span> <?= $article_title ?></span>
                </div>
                <div class="article-description">
                    <span><?= short_content($article_description, 105); ?>... </span>
                </div>
                <div class="article-btn">
                   <a href="<?= $article_permalink ?>">
                        <div class="read-more-btn">
                            <span>Read article</span>
                        </div>
                   </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

