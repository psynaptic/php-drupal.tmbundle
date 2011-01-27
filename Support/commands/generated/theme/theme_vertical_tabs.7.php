/**
 * Implements theme_vertical_tabs().
 */
function <?php print $basename; ?>_vertical_tabs(\$variables) {
  ${1:\$element = \$variables['element'];
  // Add required JavaScript and Stylesheet.
  drupal_add_library('system', 'drupal.vertical-tabs');

  \$output = '<h2 class="element-invisible">' . t('Vertical Tabs') . '</h2>';
  \$output .= '<div class="vertical-tabs-panes">' . \$element['#children'] . '</div>';
  return \$output;}
}

$2