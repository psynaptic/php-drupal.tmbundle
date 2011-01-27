/**
 * Implements theme_devel_querylog().
 */
function <?php print $basename; ?>_devel_querylog(\$variables) {
  ${1:\$header = \$variables['header'];
  \$rows = \$variables['rows'];
  \$output = '';
  if (!empty(\$header)) {
    \$output .= "<div class='devel-querylog devel-querylog-header clear-block'>";
    \$output .= theme('devel_querylog_row', array('row' => \$header));
    \$output .= "</div>";
  \}
  if (!empty(\$rows)) {
    \$i = 0;
    foreach (\$rows as \$row) {
      \$i++;
      \$zebra = (\$i % 2) == 0 ? 'even' : 'odd';
      \$output .= "<div class='devel-querylog devel-querylog-\$zebra clear-block'>";
      \$output .= theme('devel_querylog_row', array('row' => \$row));
      \$output .= "</div>";
    \}
  \}
  return \$output;}
}

$2