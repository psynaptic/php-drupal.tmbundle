/**
 * Implements hook_field_update_field().
 */
function <?php print $basename; ?>_field_update_field(\$field, \$prior_field, \$has_data) {
  ${1:// Reset the static value that keeps track of allowed values for list fields.
  drupal_static_reset('list_allowed_values');}
}

$2