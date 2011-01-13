/**
 * Implements hook_forms().
 */
function <?php print $basename; ?>_forms(\$form_id, \$args) {
  ${1:// Simply reroute the (non-existing) \$form_id 'mymodule_first_form' to
  // 'mymodule_main_form'.
  \$forms['mymodule_first_form'] = array(
    'callback' => 'mymodule_main_form',
  );

  // Reroute the \$form_id and prepend an additional argument that gets passed to
  // the 'mymodule_main_form' form builder function.
  \$forms['mymodule_second_form'] = array(
    'callback' => 'mymodule_main_form',
    'callback arguments' => array('some parameter'),
  );

  // Reroute the \$form_id, but invoke the form builder function
  // 'mymodule_main_form_wrapper' first, so we can prepopulate the \$form array
  // that is passed to the actual form builder 'mymodule_main_form'.
  \$forms['mymodule_wrapped_form'] = array(
    'callback' => 'mymodule_main_form',
    'wrapper_callback' => 'mymodule_main_form_wrapper',
  );

  return \$forms;}
}

$2