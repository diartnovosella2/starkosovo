<?php

namespace Modular\Modules\FaqAndParticipate;

/**
 * Class Front is the frontend part of the module.
 *
 * Use this class to define the frontend part of the module. To clone this
 * class simply change the namespace and for good documentation update also
 * the @package reference too.
 *
 * This class is responsible to pass the $data variable to the View. As a
 * standard let any module field value attached to the $data variable and
 * attache any other values under the args key within the same variable.
 *
 * @package Modular\Modules\FaqAndParticipate
 */
class Front
{

    private $data = null;

    /**
     * Attach more values to the $data variables.
     *
     * Logic applied here should be more specific to the module since the more
     * default logic about the module should be done in the get_data method.
     * Stick with a standard and ttach any values to the args key within the $data
     * array.
     *
     * @param $data A list with values for the View.
     * @return mixed A list with values for the View.
     */
    public function change_data($data)
    {

        return $data;
    }

    /**
     * Localize values to JS before page load.
     *
     * Populate $data['data'] variable with values needed in your JS before page load. This can be accessed
     * from JS using the modules_object.
     *
     * This function can be removed if not needed.
     *
     * @return array List with values to attach to modules_object JS object.
     */
    public function localize_script()
    {
        $data = array();

        return $data;
    }

    /**
     * Module's admin ajax logic.
     *
     * Use a switch to differ any logic between multiple ajax calls using a POST parameter 'function'.
     * The ajax jQuery function should be called in the admin.js file within the same module. This
     * function can be removed if not needed.
     */
    public function ajax()
    {
        if (!empty($_POST['function'])) {
            switch ($_POST['function']) {
                case '':
                    break;
            }
        }

        wp_die();
    }

    /**
     * Setup the $data variable with values the module needs by default
     *
     * Logic applied here should be more about filling up the $data variable with values
     * one can think of and that makes sense, so values will always be there ready when
     * the module is used or copied.
     *
     * @param $data A list with values for the View.
     * @return mixed A list with values for the View.
     */
    public function get_data($data)
    {

        $this->data = $this->change_data($data);
        return $this->data;
    }

    /**
     * Use the _error.php template to print any message. Normally used for errors.
     *
     * @param $message The message to print.
     */
    private function print_message($message)
    {
        include MODC_THEME_DIR . '/Modules/FaqAndParticipate/parts/_error.php';
    }
}

