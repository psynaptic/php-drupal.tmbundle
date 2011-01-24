/**
 * Implements hook_views_pre_view().
 */
function <?php print $basename; ?>_views_pre_view(&\$view, &\$display_id, &\$args) {
  switch (\$view->name) {
    case '${1:view_name}':
      ${2:// View modification code goes here.}
      break;
  }
}

$3