/**
 * Implements hook_field_widget_info_alter().
 */
function <?php print $basename; ?>_field_widget_info_alter(&\$info) {
  ${1:// Add a setting to a widget type.
  \$info['text_textfield']['settings'] += array(
    'mymodule_additional_setting' => 'default value',
  );

  // Let a new field type re-use an existing widget.
  \$info['options_select']['field types'][] = 'my_field_type';}
}

$2