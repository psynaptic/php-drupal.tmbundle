/**
 * Implements hook_views_pre_execute().
 */
function ${1:<?php print $basename; ?>}_views_pre_execute(&\$view) {
  switch (\$view->name) {
    case '${2:view_name}':
      ${3:// View modification code goes here.}
      break;
  }
}

$4