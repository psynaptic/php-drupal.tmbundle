/**
 * Implements theme_trigger_display().
 */
function <?php print $basename; ?>_trigger_display(\$variables) {
  ${1:\$element = \$variables['element'];

  \$header = array();
  \$rows = array();
  if (isset(\$element['assigned']) && count(\$element['assigned']['#value'])) {
    \$header = array(array('data' => t('Name')), array('data' => t('Operation')));
    \$rows = array();
    foreach (\$element['assigned']['#value'] as \$aid => \$info) {
      \$rows[] = array(
        check_plain(\$info['label']),
        \$info['link']
      );
    \}
  \}

  if (count(\$rows)) {
    \$output = theme('table', array('header' => \$header, 'rows' => \$rows)) . drupal_render_children(\$element);
  \}
  else {
    \$output = drupal_render_children(\$element);
  \}
  return \$output;}
}

$2