/**
 * Implements hook_field_attach_rename_bundle().
 */
function <?php print $basename; ?>_field_attach_rename_bundle(\$entity_type, \$bundle_old, \$bundle_new) {
  ${1:// Update the extra weights variable with new information.
  if (\$bundle_old !== \$bundle_new) {
    \$extra_weights = variable_get('field_extra_weights', array());
    if (isset(\$info[\$entity_type][\$bundle_old])) {
      \$extra_weights[\$entity_type][\$bundle_new] = \$extra_weights[\$entity_type][\$bundle_old];
      unset(\$extra_weights[\$entity_type][\$bundle_old]);
      variable_set('field_extra_weights', \$extra_weights);
    \}
  \}}
}

$2