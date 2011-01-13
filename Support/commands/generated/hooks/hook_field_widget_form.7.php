/**
 * Implements hook_field_widget_form().
 */
function <?php print $basename; ?>_field_widget_form(&\$form, &\$form_state, \$field, \$instance, \$langcode, \$items, \$delta, \$element) {
  ${1:\$element += array(
    '#type' => \$instance['widget']['type'],
    '#default_value' => isset(\$items[\$delta]) ? \$items[\$delta] : '',
  );
  return \$element;}
}

$2