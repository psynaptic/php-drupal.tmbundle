/**
 * Implements theme_node_search_admin().
 */
function <?php print $basename; ?>_node_search_admin(\$variables) {
  ${1:\$form = \$variables['form'];

  \$output = drupal_render(\$form['info']);

  \$header = array(t('Factor'), t('Weight'));
  foreach (element_children(\$form['factors']) as \$key) {
    \$row = array();
    \$row[] = \$form['factors'][\$key]['#title'];
    \$form['factors'][\$key]['#title_display'] = 'invisible';
    \$row[] = drupal_render(\$form['factors'][\$key]);
    \$rows[] = \$row;
  \}
  \$output .= theme('table', array('header' => \$header, 'rows' => \$rows));

  \$output .= drupal_render_children(\$form);
  return \$output;}
}

$2