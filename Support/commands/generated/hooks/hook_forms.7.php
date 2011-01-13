/**
 * Implements hook_forms().
 */
function <?php print $basename; ?>_forms(\$form_id, \$args) {
  ${1:\$forms['mymodule_first_form'] = array(
    'callback' => 'mymodule_main_form',
    'callback arguments' => array('some parameter'),
    'wrapper_callback' => 'mymodule_main_form_wrapper',
  );}

  return \$forms;
}

$2