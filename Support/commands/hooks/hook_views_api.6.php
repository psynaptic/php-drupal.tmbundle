/**
 * Implementation of hook_views_api().
 */
function ${1:<?php print $basename; ?>}_views_api() {
  return array(
    'api' => ${2:2},${3:
    'path' => ${4:drupal_get_path('module', '<?php print $basename ?>') . '/views'},}
  );
}

$5