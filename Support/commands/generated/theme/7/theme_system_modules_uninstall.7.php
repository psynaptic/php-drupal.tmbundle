/**
 * Implements theme_system_modules_uninstall().
 */
function <?php print $basename; ?>_system_modules_uninstall(\$variables) {
  ${1:\$form = \$variables['form'];

  // No theming for the confirm form.
  if (isset(\$form['confirm'])) {
    return drupal_render(\$form);
  \}

  // Table headers.
  \$header = array(t('Uninstall'),
    t('Name'),
    t('Description'),
  );

  // Display table.
  \$rows = array();
  foreach (element_children(\$form['modules']) as \$module) {
    if (!empty(\$form['modules'][\$module]['#required_by'])) {
      \$disabled_message = format_plural(count(\$form['modules'][\$module]['#required_by']),
        'To uninstall @module, the following module must be uninstalled first: @required_modules',
        'To uninstall @module, the following modules must be uninstalled first: @required_modules',
        array('@module' => \$form['modules'][\$module]['#module_name'], '@required_modules' => implode(', ', \$form['modules'][\$module]['#required_by'])));
      \$disabled_message = '<div class="admin-requirements">' . \$disabled_message . '</div>';
    \}
    else {
      \$disabled_message = '';
    \}
    \$rows[] = array(
      array('data' => drupal_render(\$form['uninstall'][\$module]), 'align' => 'center'),
      '<strong><label for="' . \$form['uninstall'][\$module]['#id'] . '">' . drupal_render(\$form['modules'][\$module]['name']) . '</label></strong>',
      array('data' => drupal_render(\$form['modules'][\$module]['description']) . \$disabled_message, 'class' => array('description')),
    );
  \}

  \$output  = theme('table', array('header' => \$header, 'rows' => \$rows, 'empty' => t('No modules are available to uninstall.')));
  \$output .= drupal_render_children(\$form);

  return \$output;}
}

$2