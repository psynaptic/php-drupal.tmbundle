/**
 * Implements hook_views_post_render().
 */
function ${1:<?php print $basename; ?>}_views_post_render(&\$view, &\$output, &\$cache) {
  switch (\$view->name) {
    case '${2:view_name}':
      ${3:// View modification code goes here.}
      break;
  }
}

$4