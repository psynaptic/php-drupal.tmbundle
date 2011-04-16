/**
 * Implements hook_language_negotiation_info().
 */
function <?php print $basename; ?>_language_negotiation_info() {
  ${1:return array(
    'custom_language_provider' => array(
      'callbacks' => array(
        'language' => 'custom_language_provider_callback',
        'switcher' => 'custom_language_switcher_callback',
        'url_rewrite' => 'custom_language_url_rewrite_callback',
      ),
      'file' => drupal_get_path('module', 'custom') . '/custom.module',
      'weight' => -4,
      'types' => array('custom_language_type'),
      'name' => t('Custom language provider'),
      'description' => t('This is a custom language provider.'),
      'cache' => 0,
    ),
  );}
}

$2