<?php

namespace Modular\Child;

use Modular\Child\Singletons\Cache;
use Modular\Parent\ACF as _ACF;

class ACF extends _ACF
{

    public function get_dynamic_choices($group)
    {

        if (!empty($group['fields'])) {

            foreach ($group['fields'] as $index => $field) {
                switch ($field['name']) {
                    case 'unique_selling_points':
                        $unique_selling_points = Cache::self()->get_unique_selling_points();
                        if (!empty($unique_selling_points)) {
                            $group['fields'][$index]['choices'] = $unique_selling_points;
                        }
                        break;
                    case 'casino_type_support':
                        $casino_type_support = Cache::self()->get_casino_type_support();
                        if (!empty($casino_type_support)) {
                            $group['fields'][$index]['choices'] = $casino_type_support;
                        }
                        break;
                }
            }
        }

        return $group;
    }

    public function child_posttype_hide_fields()
    {

        global $post;

        if (!empty($post)) {
            if ($post->post_type != 'casino' && $post->post_type != 'game') {
                echo "<style>.acf-field-flexible-5afdab658d2bd { display:none !important }</style>";
                echo "<style>.acf-field-flexible-5afe9d17381d0 { display:none !important }</style>";
            }

            if ($post->post_type == 'casino') {
                echo "<style>.acf-field-flexible-5adecb92f64dc { display:none !important }</style>";
                echo "<style>.acf-field-flexible-5afe9d17381d0 { display:none !important }</style>";
            }

            if ($post->post_type == 'game') {
                echo "<style>.acf-field-flexible-5adecb92f64dc { display:none !important }</style>";
                echo "<style>.acf-field-flexible-5afdab658d2bd { display:none !important }</style>";
            }
        }
    }
}
