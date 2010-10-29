/**
 * Implementation of hook_views_admin_links_alter().
 */
function <?php print $basename; ?>_views_admin_links_alter(&\$links, \$view) {${1:
  switch (\$view->name) {
    case '${2:view_name}':
      ${3:// Link alter goes here.}
      break;
  \}}
}

$4