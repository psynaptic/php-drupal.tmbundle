/**
 * Implements hook_field_widget_properties_alter().
 */
function <?php print $basename; ?>_field_widget_properties_alter(&\$widget, \$context) {
  ${1:// Change a widget's type according to the time of day.
  \$field = \$context['field'];
  if (\$context['entity_type'] == 'node' && \$field['field_name'] == 'field_foo') {
    \$time = date('H');
    \$widget['type'] = \$time < 12 ? 'widget_am' : 'widget_pm';
  \}}
}

$2