/**
 * Implements theme_user_admin_roles().
 */
function <?php print $basename; ?>_user_admin_roles(\$variables) {
  ${1:\$form = \$variables['form'];

  \$header = array(t('Name'), t('Weight'), array('data' => t('Operations'), 'colspan' => 2));
  foreach (element_children(\$form['roles']) as \$rid) {
    \$name = \$form['roles'][\$rid]['#role']->name;
    \$row = array();
    if (in_array(\$rid, array(DRUPAL_ANONYMOUS_RID, DRUPAL_AUTHENTICATED_RID))) {
      \$row[] = t('@name <em>(locked)</em>', array('@name' => \$name));
      \$row[] = drupal_render(\$form['roles'][\$rid]['weight']);
      \$row[] = '';
      \$row[] = l(t('edit permissions'), 'admin/people/permissions/' . \$rid);
    \}
    else {
      \$row[] = check_plain(\$name);
      \$row[] = drupal_render(\$form['roles'][\$rid]['weight']);
      \$row[] = l(t('edit role'), 'admin/people/permissions/roles/edit/' . \$rid);
      \$row[] = l(t('edit permissions'), 'admin/people/permissions/' . \$rid);
    \}
    \$rows[] = array('data' => \$row, 'class' => array('draggable'));
  \}
  \$rows[] = array(array('data' => drupal_render(\$form['name']) . drupal_render(\$form['add']), 'colspan' => 4, 'class' => 'edit-name'));

  drupal_add_tabledrag('user-roles', 'order', 'sibling', 'role-weight');

  \$output = theme('table', array('header' => \$header, 'rows' => \$rows, 'attributes' => array('id' => 'user-roles')));
  \$output .= drupal_render_children(\$form);

  return \$output;}
}

$2