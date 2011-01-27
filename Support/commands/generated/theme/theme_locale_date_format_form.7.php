/**
 * Implements theme_locale_date_format_form().
 */
function <?php print $basename; ?>_locale_date_format_form(\$variables) {
  ${1:\$form = \$variables['form'];
  \$header = array(
    t('Date type'),
    t('Format'),
  );

  foreach (element_children(\$form['date_formats']) as \$key) {
    \$row = array();
    \$row[] = \$form['date_formats'][\$key]['#title'];
    unset(\$form['date_formats'][\$key]['#title']);
    \$row[] = array('data' => drupal_render(\$form['date_formats'][\$key]));
    \$rows[] = \$row;
  \}

  \$output = drupal_render(\$form['language']);
  \$output .= theme('table', array('header' => \$header, 'rows' => \$rows));
  \$output .= drupal_render_children(\$form);

  return \$output;}
}

$2