/**
 * Implements hook_css_alter().
 */
function <?php print $basename; ?>_css_alter(&\$css) {
  ${1:// Remove defaults.css file.
  unset(\$css[drupal_get_path('module', 'system') . '/defaults.css']);}
}

$2