clear
echo "Starting shell script ...";

cd Modules

echo "Module Name: $1";
convertedName=$(sed --expression 's/\([A-Z]\)/_\L\1/g' \
    --expression 's/^_//'              \
    <<< "$1")

echo "Converted to Snake Case: $convertedName";

if [ -a $1 ];
then
echo 'The module allready exists';
else
mkdir $1
cd $1
mkdir assets

cd assets
mkdir js
mkdir sass

cd js
echo "jQuery(document).ready(function ($) {

    var $convertedName = '$convertedName';

    // The following is an example of javascript triggering on change of the select_post_type radio button. This will
    // also take care of the preset module, top and bottom module list, multi module and modules in pages and custom post types.

    // var module = '[data-layout="' + module_name + '"] [data-name=\"select_post_type\"] input[type=radio]';
    // var multi_module = '[data-layout=\"multi_module\"] [data-name="' + module_name + '"] [data-name=\"select_post_type\"] input[type=radio]';
    // var preset = '[data-name="' + module_name + '"] [data-name=\"select_post_type\"] input[type=radio]';
    //
    // \$('[data-name=\"modules_list\"], [data-name=\"module_top_list\"], [data-name=\"module_bottom_list\"], [class=\"postbox  acf-postbox\"]')
    //     .on('change', module + ', ' + multi_module + ', ' + preset, function () {
    //         CUSTOM JS CODE
    // });
});
">>admin.js
echo "jQuery(document).ready(function ($) {

    var $convertedName = '$convertedName';
});
">> front.js

cd ..
cd sass
echo ".$convertedName {

}" >> style.scss
cd ..
cd ..
 
mkdir parts
cd parts
echo "<div class=\"module-error\">
    <span>
        <?php echo \$message ?>
    </span>
</div>
" >> _error.php

cd ..

touch Admin.php; 
echo "<?php

namespace Modular\Modules\\$1;

/**
 * Class Admin is the backend part of the module.
 *
 * Use this class to define the backend part of the module. To clone this
 * class simply change the namespace and the returned value in the name method.
 * For good documentation update also the @package reference too.
 *
 * @package Modular\Modules\\$1
 */
class Admin
{

    /**
     * Define the name of the module.
     *
     * The name of the module should be in lowercase and snake_case. Use \$this->name()
     * were needed in this class to make your logic more dynamic.
     *
     * @return string The name of the module in lowercase and snake_case.
     */
    public function name()
    {

        return '$convertedName';
    }

    /**
     * Configure default values and hidden fields.
     *
     * The module contains a lot of fields to allow more flexible configurations. Defining
     * default values and hiding fields can be used to restrict the site manager from inserting
     * wrong values and also making the module easier to use.
     *
     * This function can be removed if not needed.
     *
     * @return array A list of fields with default values and another that should be hidden
     */
    public function set_default()
    {

        return array(
            'default' => array(),
            'hidden'  => array()
        );
    }

    /**
     * Define the list of fields to dynamically populate.
     *
     * Some fields' values cannot be hardcoded, such as a list of post types or categories, since
     * these can change at anytime. List the field names that require logic to obtain
     * the right value.
     *
     * This function can be removed if not needed.
     *
     * @return array A list of fields.
     */
    public function prepare_fields()
    {

        return array();
    }

    /**
     * Configure and populate the fields that should have dynamically loaded values.
     *
     * Some fields' values cannot be hardcoded, such as a list of post types or categories, since
     * these can change at anytime. Use a switch to define the logic for a field to populate the
     * right values.
     *
     * @param \$field The ACF field array.
     *
     * @return mixed The updated ACF field array.
     */
    public function prepare_field(\$field)
    {

        switch (\$field[ '_name' ]) {

        }

        return \$field;
    }

    /**
     * Configure image sizes to be cropped for different platforms.
     *
     * If an image is rendered at different resolutions on different screen sizes, it's recommended
     * to configure cropping sizes where needed to optimize page load time. The array accepts 5
     * different screen sizes; desktop, laptop, tablet, large-mobile, small-mobile. For best
     * optimization make sure the right breakpoints are set in the Config class, default_breakpoints
     * method.
     *
     * More than one image name size can be created, and it's important to keep this naming unique
     * throughout all the modules. It's thus recommended to use the name of the module in the image
     * name.
     *
     * To apply the configured cropping on the image needed, when setting up the image details in
     * the \$data variable in the Front class of the same module pass the image name defined here to
     * the set_image method.
     *
     * This function can be removed if not needed.
     *
     * @return array
     */
    public function create_image_sizes()
    {

        return array();
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

        if (!empty(\$_POST[ 'function' ])) {

            switch (\$_POST[ 'function' ]) {
                case '':
                break;
            }
        }

        wp_die();
    }

    /**
     * Localize values to JS before admin page load.
     *
     * Populate \$data['data'] variable with values needed in your JS before page load. This can be accessed
     * from JS using the modules_object.
     *
     * This function can be removed if not needed.
     *
     * @return array List with values to attach to modules_object JS object.
     */
    public function localize_script()
    {

        \$data = array();

        return \$data;
    }

    /**
     * The ACF fields array for the module.
     *
     * Place the PHP Generated array provided by ACF export Tool here. Replace the module group title with
     * ucwords(str_replace(array('-', '_'), ' ', \$this->name())) and the location value with
     * 'module-taxonomy:' . \$this->name().
     *
     * @return array The ACF fields list.
     */
    public function get_fields()
    {

        return array(
            
        );
    }
}
">> Admin.php





touch Front.php
echo "<?php

namespace Modular\Modules\\$1;

/**
 * Class Front is the frontend part of the module.
 *
 * Use this class to define the frontend part of the module. To clone this
 * class simply change the namespace and for good documentation update also
 * the @package reference too.
 *
 * This class is responsible to pass the \$data variable to the View. As a
 * standard let any module field value attached to the \$data variable and
 * attache any other values under the args key within the same variable.
 *
 * @package Modular\Modules\\$1
 */
class Front
{

    private \$data = null;

    /**
     * Attach more values to the \$data variables.
     *
     * Logic applied here should be more specific to the module since the more
     * default logic about the module should be done in the get_data method.
     * Stick with a standard and ttach any values to the args key within the \$data
     * array.
     *
     * @param \$data A list with values for the View.
     * @return mixed A list with values for the View.
     */
    public function change_data(\$data)
    {

        return \$data;
    }

    /**
     * Localize values to JS before page load.
     *
     * Populate \$data['data'] variable with values needed in your JS before page load. This can be accessed
     * from JS using the modules_object.
     *
     * This function can be removed if not needed.
     *
     * @return array List with values to attach to modules_object JS object.
     */
    public function localize_script()
    {
        \$data = array();

        return \$data;
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
        if (!empty(\$_POST['function'])) {
            switch (\$_POST['function']) {
                case '':
                    break;
            }
        }

        wp_die();
    }

    /**
     * Setup the \$data variable with values the module needs by default
     *
     * Logic applied here should be more about filling up the \$data variable with values
     * one can think of and that makes sense, so values will always be there ready when
     * the module is used or copied.
     *
     * @param \$data A list with values for the View.
     * @return mixed A list with values for the View.
     */
    public function get_data(\$data)
    {

        \$this->data = \$this->change_data(\$data);
        return \$this->data;
    }

    /**
     * Use the _error.php template to print any message. Normally used for errors.
     *
     * @param \$message The message to print.
     */
    private function print_message(\$message)
    {
        include MODC_THEME_DIR . '/Modules/$1/parts/_error.php';
    }
}
">> Front.php
echo "
<?php
/**
 * Place HTML here.
 *
 * Make use of Helper functions image() and link() to render images
 * and anchor HTML elements.
 */
">> view.php
fi
echo 'FINISHED';
