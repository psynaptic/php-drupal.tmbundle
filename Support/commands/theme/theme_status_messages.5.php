/**
 * Return a themed set of status and/or error messages. The messages are grouped
 * by type.
 *
 * @param \$display
 *   (optional) Set to 'status' or 'error' to display only messages of that type.
 *
 * @return
 *   A string containing the messages.
 */
function ${1:phptemplate}_status_messages(\$display = NULL) {
  \$output = '';
  foreach (drupal_get_messages(\$display) as \$type => \$messages) {
    \$output .= "<div class=\"messages \$type\">\n";
    if (count(\$messages) > 1) {
      \$output .= " <ul>\n";
      foreach (\$messages as \$message) {
        \$output .= '  <li>'. \$message ."</li>\n";
      }
      \$output .= " </ul>\n";
    }
    else {
      \$output .= \$messages[0];
    }
    \$output .= "</div>\n";
  }
  return \$output;
}

$2