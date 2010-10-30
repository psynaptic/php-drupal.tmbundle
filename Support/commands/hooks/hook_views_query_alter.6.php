/**
 * Implements hook_views_query_alter().
 */
function <?php print $basename; ?>_views_query_alter(&\$view, &\$query)) {
  switch (\$view->name) {
    case '${1:view_name}':
      ${2:// Code goes here.}
      break;
  }
}

$3