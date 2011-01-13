/**
 * Implements hook_forms().
 */
function <?php print $basename; ?>_forms(\$form_id, \$args) {
  ${1:\$forms['mymodule_first_form'] = array(
    'callback' => 'mymodule_form_builder',
    'callback arguments' => array('some parameter'),
  );
  \$forms['mymodule_second_form'] = array(
    'callback' => 'mymodule_form_builder',
  );
  return \$forms;}
}

$2