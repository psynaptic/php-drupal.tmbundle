/**
 * Implements theme_system_date_time_settings().
 */
function <?php print $basename; ?>_system_date_time_settings(\$variables) {
  ${1:\$form = \$variables['form'];
  \$header = array(
    t('Date type'),
    t('Format'),
    t('Operations'),
  );

  foreach (element_children(\$form['format']) as \$key) {
    \$delete_key = \$key . '_delete';
    \$row = array();
    \$row[] = \$form['format'][\$key]['#title'];
    \$form['format'][\$key]['#title_display'] = 'invisible';
    \$row[] = \$form['format'][\$key]['#title_display'];
    \$row[] = array('data' => drupal_render(\$form['format'][\$key]));
    \$row[] = array('data' => drupal_render(\$form['delete'][\$delete_key]));
    \$rows[] = \$row;
  \}

  \$output = theme('table', array('header' => \$header, 'rows' => \$rows, 'attributes' => array('id' => 'system-date-types')));
  \$output .= drupal_render_children(\$form);

  return \$output;}
}

$2