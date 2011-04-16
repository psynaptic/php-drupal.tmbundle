/**
 * Implements theme_status_messages().
 */
function <?php print $basename; ?>_status_messages(\$display = NULL) {
  ${1:\$output = '';
  foreach (drupal_get_messages(\$display) as \$type => \$messages) {
    \$output .= "<div class=\"messages \$type\">\n";
    if (count(\$messages) > 1) {
      \$output .= " <ul>\n";
      foreach (\$messages as \$message) {
        \$output .= '  <li>'. \$message ."</li>\n";
      \}
      \$output .= " </ul>\n";
    \}
    else {
      \$output .= \$messages[0];
    \}
    \$output .= "</div>\n";
  \}
  return \$output;}
}

$2