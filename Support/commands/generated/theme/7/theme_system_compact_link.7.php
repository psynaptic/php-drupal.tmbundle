/**
 * Implements theme_system_compact_link().
 */
function <?php print $basename; ?>_system_compact_link() {
  ${1:\$output = '<div class="compact-link">';
  if (system_admin_compact_mode()) {
    \$output .= l(t('Show descriptions'), 'admin/compact/off', array('attributes' => array('title' => t('Expand layout to include descriptions.')), 'query' => drupal_get_destination()));
  \}
  else {
    \$output .= l(t('Hide descriptions'), 'admin/compact/on', array('attributes' => array('title' => t('Compress layout by hiding descriptions.')), 'query' => drupal_get_destination()));
  \}
  \$output .= '</div>';

  return \$output;}
}

$2