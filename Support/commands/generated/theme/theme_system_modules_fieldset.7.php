/**
 * Implements theme_system_modules_fieldset().
 */
function <?php print $basename; ?>_system_modules_fieldset(\$variables) {
  ${1:\$form = \$variables['form'];

  // Individual table headers.
  \$rows = array();
  // Iterate through all the modules, which are
  // children of this fieldset.
  foreach (element_children(\$form) as \$key) {
    // Stick it into \$module for easier accessing.
    \$module = \$form[\$key];
    \$row = array();
    unset(\$module['enable']['#title']);
    \$row[] = array('class' => array('checkbox'), 'data' => drupal_render(\$module['enable']));
    \$label = '<label';
    if (isset(\$module['enable']['#id'])) {
      \$label .= ' for="' . \$module['enable']['#id'] . '"';
    \}
    \$row[] = \$label . '><strong>' . drupal_render(\$module['name']) . '</strong></label>';
    \$row[] = drupal_render(\$module['version']);
    // Add the description, along with any modules it requires.
    \$description = drupal_render(\$module['description']);
    if (\$module['#requires']) {
      \$description .= '<div class="admin-requirements">' . t('Requires: !module-list', array('!module-list' => implode(', ', \$module['#requires']))) . '</div>';
    \}
    if (\$module['#required_by']) {
      \$description .= '<div class="admin-requirements">' . t('Required by: !module-list', array('!module-list' => implode(', ', \$module['#required_by']))) . '</div>';
    \}
    \$row[] = array('data' => \$description, 'class' => array('description'));
    // Display links (such as help or permissions) in their own columns.
    foreach (array('help', 'permissions', 'configure') as \$key) {
      \$row[] = array('data' => drupal_render(\$module['links'][\$key]), 'class' => array(\$key));
    \}
    \$rows[] = \$row;
  \}

  return theme('table', array('header' => \$form['#header'], 'rows' => \$rows));}
}

$2