/**
 * Implements hook_views_default_views().
 */
function ${1:<?php print $basename; ?>}_views_default_views() {
  \$view = new view;
  \$view->name = '${2:view_name}';
  
  ${3:// Code goes here.}
  
  \$views[\$view->name] = \$view;
  return \$views;
}

$4