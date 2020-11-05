<?php

get_header();

$page = \Modular\Child\Helpers::get_archive_page(get_queried_object());

// Include all the modules
echo \Modular\Child\Setup::modules($page);

get_footer();