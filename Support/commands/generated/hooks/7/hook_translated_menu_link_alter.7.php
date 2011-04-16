/**
 * Implements hook_translated_menu_link_alter().
 */
function <?php print $basename; ?>_translated_menu_link_alter(&\$item, \$map) {
  ${1:if (\$item['href'] == 'devel/cache/clear') {
    \$item['localized_options']['query'] = drupal_get_destination();
  \}}
}

$2