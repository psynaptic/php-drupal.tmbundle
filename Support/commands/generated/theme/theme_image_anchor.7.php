/**
 * Implements theme_image_anchor().
 */
function <?php print $basename; ?>_image_anchor(\$variables) {
  ${1:\$element = \$variables['element'];

  \$rows = array();
  \$row = array();
  foreach (element_children(\$element) as \$n => \$key) {
    \$element[\$key]['#attributes']['title'] = \$element[\$key]['#title'];
    unset(\$element[\$key]['#title']);
    \$row[] = drupal_render(\$element[\$key]);
    if (\$n % 3 == 3 - 1) {
      \$rows[] = \$row;
      \$row = array();
    \}
  \}

  return theme('table', array('header' => array(), 'rows' => \$rows, 'attributes' => array('class' => array('image-anchor'))));}
}

$2