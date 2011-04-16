/**
 * Implements hook_field_widget_error().
 */
function <?php print $basename; ?>_field_widget_error(\$element, \$error, \$form, &\$form_state) {
  ${1:form_error(\$element['value'], \$error['message']);}
}

$2