/**
 * Implementation of hook_views_pre_view().
 */
function ${1:<?php print $basename; ?>}_views_pre_view(&\$view, &\$display_id, &\$args)) {
  switch (\$view->name) {
    case '${2:view_name}':
      ${3:// View modification code goes here.}
      break;
  }
}

$4