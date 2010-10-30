/**
 * Implements hook_views_query_alter().
 */
function ${1:<?php print $basename; ?>}_views_query_alter(&\$view, &\$query)) {
  switch (\$view->name) {
    case '${2:view_name}':
      ${3:// Code goes here.}
      break;
  }
}

$4