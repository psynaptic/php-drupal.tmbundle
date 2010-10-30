/**
 * Implements hook_views_preview_info_alter().
 */
function <?php print $basename; ?>_views_preview_info_alter(&\$rows, \$view) {
  switch (\$view->name) {
    case '${1:view_name}':
      ${2:// Rows modification code goes here.}
      break;
  }
}

$3