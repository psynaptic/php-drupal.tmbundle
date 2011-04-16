/**
 * Implements theme_node_search_admin().
 */
function <?php print $basename; ?>_node_search_admin(\$form) {
  ${1:\$output = drupal_render(\$form['info']);

  \$header = array(t('Factor'), t('Weight'));
  foreach (element_children(\$form['factors']) as \$key) {
    \$row = array();
    \$row[] = \$form['factors'][\$key]['#title'];
    unset(\$form['factors'][\$key]['#title']);
    \$row[] = drupal_render(\$form['factors'][\$key]);
    \$rows[] = \$row;
  \}
  \$output .= theme('table', \$header, \$rows);

  \$output .= drupal_render(\$form);
  return \$output;}
}

$2