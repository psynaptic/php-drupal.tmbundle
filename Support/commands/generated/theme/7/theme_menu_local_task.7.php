/**
 * Implements theme_menu_local_task().
 */
function <?php print $basename; ?>_menu_local_task(\$variables) {
  ${1:\$link = \$variables['element']['#link'];
  \$link_text = \$link['title'];

  if (!empty(\$variables['element']['#active'])) {
    // Add text to indicate active tab for non-visual users.
    \$active = '<span class="element-invisible">' . t('(active tab)') . '</span>';

    // If the link does not contain HTML already, check_plain() it now.
    // After we set 'html'=TRUE the link will not be sanitized by l().
    if (empty(\$link['localized_options']['html'])) {
      \$link['title'] = check_plain(\$link['title']);
    \}
    \$link['localized_options']['html'] = TRUE;
    \$link_text = t('!local-task-title!active', array('!local-task-title' => \$link['title'], '!active' => \$active));
  \}

  return '<li' . (!empty(\$variables['element']['#active']) ? ' class="active"' : '') . '>' . l(\$link_text, \$link['href'], \$link['localized_options']) . "</li>\n";}
}

$2