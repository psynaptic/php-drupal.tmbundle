/**
 * Implements hook_language_types_info().
 */
function <?php print $basename; ?>_language_types_info() {
  ${1:return array(
    'custom_language_type' => array(
      'name' => t('Custom language'),
      'description' => t('A custom language type.'),
    ),
    'fixed_custom_language_type' => array(
      'fixed' => array('custom_language_provider'),
    ),
  );}
}

$2