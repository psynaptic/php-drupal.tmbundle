/**
 * Implements hook_field_formatter_info_alter().
 */
function <?php print $basename; ?>_field_formatter_info_alter(&\$info) {
  ${1:// Add a setting to a formatter type.
  \$info['text_default']['settings'] += array(
    'mymodule_additional_setting' => 'default value',
  );

  // Let a new field type re-use an existing formatter.
  \$info['text_default']['field types'][] = 'my_field_type';}
}

$2