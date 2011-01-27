/**
 * Implements theme_user_admin_permissions().
 */
function <?php print $basename; ?>_user_admin_permissions(\$variables) {
  ${1:\$form = \$variables['form'];

  \$roles = user_roles();
  foreach (element_children(\$form['permission']) as \$key) {
    \$row = array();
    // Module name
    if (is_numeric(\$key)) {
      \$row[] = array('data' => drupal_render(\$form['permission'][\$key]), 'class' => array('module'), 'id' => 'module-' . \$form['permission'][\$key]['#id'], 'colspan' => count(\$form['role_names']['#value']) + 1);
    \}
    else {
      // Permission row.
      \$row[] = array(
        'data' => drupal_render(\$form['permission'][\$key]),
        'class' => array('permission'),
      );
      foreach (element_children(\$form['checkboxes']) as \$rid) {
        \$form['checkboxes'][\$rid][\$key]['#title'] = \$roles[\$rid] . ': ' . \$form['permission'][\$key]['#markup'];
        \$form['checkboxes'][\$rid][\$key]['#title_display'] = 'invisible';
        \$row[] = array('data' => drupal_render(\$form['checkboxes'][\$rid][\$key]), 'class' => array('checkbox'));
      \}
    \}
    \$rows[] = \$row;
  \}
  \$header[] = (t('Permission'));
  foreach (element_children(\$form['role_names']) as \$rid) {
    \$header[] = array('data' => drupal_render(\$form['role_names'][\$rid]), 'class' => array('checkbox'));
  \}
  \$output = theme('system_compact_link');
  \$output .= theme('table', array('header' => \$header, 'rows' => \$rows, 'attributes' => array('id' => 'permissions')));
  \$output .= drupal_render_children(\$form);
  return \$output;}
}

$2