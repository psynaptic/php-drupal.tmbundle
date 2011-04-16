/**
 * Implements theme_menu_local_tasks().
 */
function <?php print $basename; ?>_menu_local_tasks(&\$variables) {
  ${1:\$output = '';

  if (!empty(\$variables['primary'])) {
    \$variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    \$variables['primary']['#prefix'] .= '<ul class="tabs primary">';
    \$variables['primary']['#suffix'] = '</ul>';
    \$output .= drupal_render(\$variables['primary']);
  \}
  if (!empty(\$variables['secondary'])) {
    \$variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    \$variables['secondary']['#prefix'] .= '<ul class="tabs secondary">';
    \$variables['secondary']['#suffix'] = '</ul>';
    \$output .= drupal_render(\$variables['secondary']);
  \}

  return \$output;}
}

$2