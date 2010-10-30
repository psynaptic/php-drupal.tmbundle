/**
 * Implements hook_views_preview_info_alter().
 */
function ${1:<?php print $basename; ?>}_views_preview_info_alter(&\$rows, \$view) {
  switch (\$view->name) {
    case '${2:view_name}':
      ${3:// Rows modification code goes here.}
      break;
  }
}

$4