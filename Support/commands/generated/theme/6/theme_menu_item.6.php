/**
 * Implements theme_menu_item().
 */
function <?php print $basename; ?>_menu_item(\$link, \$has_children, \$menu = '', \$in_active_trail = FALSE, \$extra_class = NULL) {
  ${1:\$class = (\$menu ? 'expanded' : (\$has_children ? 'collapsed' : 'leaf'));
  if (!empty(\$extra_class)) {
    \$class .= ' '. \$extra_class;
  \}
  if (\$in_active_trail) {
    \$class .= ' active-trail';
  \}
  return '<li class="'. \$class .'">'. \$link . \$menu ."</li>\n";}
}

$2