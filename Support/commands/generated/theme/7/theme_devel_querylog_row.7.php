/**
 * Implements theme_devel_querylog_row().
 */
function <?php print $basename; ?>_devel_querylog_row(\$variables) {
  ${1:\$row = \$variables['row'];
  \$i = 0;
  \$output = '';
  foreach (\$row as \$cell) {
    \$i++;

    if (is_array(\$cell)) {
      \$data = !empty(\$cell['data']) ? \$cell['data'] : '';
      unset(\$cell['data']);
      \$attr = \$cell;
    \}
    else {
      \$data = \$cell;
      \$attr = array();
    \}

    if (!empty(\$attr['class'])) {
      \$attr['class'] .= " cell cell-\$i";
    \}
    else {
      \$attr['class'] = "cell cell-\$i";
    \}
    \$attr = drupal_attributes(\$attr);

    \$output .= "<div \$attr>\$data</div>";
  \}
  return \$output;}
}

$2