/**
 * Implements theme_dblog_message().
 */
function <?php print $basename; ?>_dblog_message(\$variables) {
  ${1:\$output = '';
  \$event = \$variables['event'];
  // Check for required properties.
  if (isset(\$event->message) && isset(\$event->variables)) {
    // Messages without variables or user specified text.
    if (\$event->variables === 'N;') {
      \$output = \$event->message;
    \}
    // Message to translate with injected variables.
    else {
      \$output = t(\$event->message, unserialize(\$event->variables));
    \}
    if (\$variables['link'] && isset(\$event->wid)) {
      // Truncate message to 56 chars.
      \$output = truncate_utf8(filter_xss(\$output, array()), 56, TRUE, TRUE);
      \$output = l(\$output, 'admin/reports/event/' . \$event->wid, array('html' => TRUE));
    \}
  \}
  return \$output;}
}

$2