<?php

get_header();

global $post;

$post = get_post(\Modular\Child\Helpers::get_archive_page(get_queried_object()), OBJECT);
setup_postdata($post);

// Include all the modules
echo \Modular\Child\Setup::modules();

get_footer();