/**
 * Implements hook_field_attach_submit().
 */
function <?php print $basename; ?>_field_attach_submit(\$entity_type, \$entity, \$form, &\$form_state) {
  ${1:// Sample case of an 'Empty the field' checkbox added on the form, allowing
  // a given field to be emptied.
  \$values = drupal_array_get_nested_value(\$form_state['values'], \$form['#parents']);
  if (!empty(\$values['empty_field_foo'])) {
    unset(\$entity->field_foo);
  \}}
}

$2