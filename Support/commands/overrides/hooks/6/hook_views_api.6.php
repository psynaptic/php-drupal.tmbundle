/**
 * Implements hook_views_api().
 */
function <?php print $basename; ?>_views_api() {
  return array(
    'api' => ${1:1},${2:
    'path' => ${3:drupal_get_path('module', '<?php print $basename ?>') . '/views'},}
  );
}

$4