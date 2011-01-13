/**
 * Implements hook_filter_FILTER_settings().
 */
function <?php print $basename; ?>_filter_FILTER_settings(\$form, &\$form_state, \$filter, \$format, \$defaults, \$filters) {
  ${1:\$filter->settings += \$defaults;

  \$elements = array();
  \$elements['nofollow'] = array(
    '#type' => 'checkbox',
    '#title' => t('Add rel="nofollow" to all links'),
    '#default_value' => \$filter->settings['nofollow'],
  );
  return \$elements;}
}

$2