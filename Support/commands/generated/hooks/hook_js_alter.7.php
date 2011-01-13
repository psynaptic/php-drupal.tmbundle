/**
 * Implements hook_js_alter().
 */
function <?php print $basename; ?>_js_alter(&\$javascript) {
  ${1:// Swap out jQuery to use an updated version of the library.
  \$javascript['misc/jquery.js']['data'] = drupal_get_path('module', 'jquery_update') . '/jquery.js';}
}

$2