<?php 
    get_header(); 
    /* Template Name: Blog */

    echo \Modular\Child\Setup::modules(); 
        $args = array(
            'post_type'      => 'article',
            'post_status'    => 'publish',
            'posts_per_page' => 6,
            'orderby'        => 'publish_date',
            'order'          => 'DESC',
        );
        $query = new \WP_Query($args);
        $articles_array = (array)$query;
        $articles = $articles_array['posts'];
    ?>

    <div class="resources-preview-container">
        <div class="articles-container blogz">
            <?php foreach ($articles as $article): 
                $article_id = $article->ID;
                $article_title = $article->post_title;
                $article_description = get_field('content', $article_id);
                $article_thumbnail = get_the_post_thumbnail($article_id);
                $article_permalink = get_permalink($article_id);
                $page_modules = get_field('modules_list',$article_id);
                $content = '';
                foreach ($page_modules as $module) {
                    if($module['acf_fc_layout'] == 'content'){
                        $content = $module['wysiwyng_editor']; break;
                    }
                }
                $content = strip_tags(substr($content, strpos($content, "<p"), strpos($content, "</p>")+4));
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
                        <span><?= short_content($content, 80); ?>... </span>
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


    <?php
    get_footer();