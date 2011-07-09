/**
 * Implements hook_views_api().
 */
function <?php print $basename ?>_views_api() {
  return array(
    'api' => ${1:3},${2,
    'path' => drupal_get_path('module', '<?php print $basename ?>') . '${3:/includes/views}',
  );
}

$4