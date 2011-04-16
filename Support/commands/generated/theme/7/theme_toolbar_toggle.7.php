/**
 * Implements theme_toolbar_toggle().
 */
function <?php print $basename; ?>_toolbar_toggle(\$variables) {
  ${1:if (\$variables['collapsed']) {
    \$toggle_text = t('Show shortcuts');
  \}
  else {
    \$toggle_text = t('Hide shortcuts');
    \$variables['attributes']['class'][] = 'toggle-active';
  \}
  return '<a href="' . url('toolbar/toggle', array('query' => drupal_get_destination())) . '" title="' . \$toggle_text . '"' .  drupal_attributes(\$variables['attributes']) . '>' . \$toggle_text . '</a>';}
}

$2