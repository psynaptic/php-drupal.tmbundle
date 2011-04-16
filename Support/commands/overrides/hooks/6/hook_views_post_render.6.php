/**
 * Implements hook_views_post_render().
 */
function <?php print $basename; ?>_views_post_render(&\$view, &\$output, &\$cache) {
  switch (\$view->name) {
    case '${1:view_name}':
      ${2:// View modification code goes here.}
      break;
  }
}

$3