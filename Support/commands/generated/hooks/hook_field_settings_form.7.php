/**
 * Implements hook_field_settings_form().
 */
function <?php print $basename; ?>_field_settings_form(\$field, \$instance, \$has_data) {
  ${1:\$settings = \$field['settings'];
  \$form['max_length'] = array(
    '#type' => 'textfield',
    '#title' => t('Maximum length'),
    '#default_value' => \$settings['max_length'],
    '#required' => FALSE,
    '#element_validate' => array('_element_validate_integer_positive'),
    '#description' => t('The maximum length of the field in characters. Leave blank for an unlimited size.'),
  );
  return \$form;}
}

$2