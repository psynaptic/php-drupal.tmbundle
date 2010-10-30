/**
 * Implements hook_views_default_views().
 */
function <?php print $basename; ?>_views_default_views() {
  \$view = new view;
  \$view->name = '${1:view_name}';
  
  ${2:// Code goes here.}
  
  \$views[\$view->name] = \$view;
  return \$views;
}

$3