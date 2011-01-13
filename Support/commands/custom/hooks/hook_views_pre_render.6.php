/**
 * Implements hook_views_pre_render().
 */
function <?php print $basename; ?>_views_pre_view(&\$view) {
  switch (\$view->name) {
    case '${1:view_name}':
      ${2:// View modification code goes here.}
      break;
  }
}

$3