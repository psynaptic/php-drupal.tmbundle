/**
 * Implements hook_field_attach_delete_bundle().
 */
function <?php print $basename; ?>_field_attach_delete_bundle(\$entity_type, \$bundle, \$instances) {
  ${1:// Remove the extra weights variable information for this bundle.
  \$extra_weights = variable_get('field_extra_weights', array());
  if (isset(\$extra_weights[\$entity_type][\$bundle])) {
    unset(\$extra_weights[\$entity_type][\$bundle]);
    variable_set('field_extra_weights', \$extra_weights);
  \}}
}

$2