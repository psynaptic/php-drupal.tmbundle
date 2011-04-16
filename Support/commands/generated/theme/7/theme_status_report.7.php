/**
 * Implements theme_status_report().
 */
function <?php print $basename; ?>_status_report(\$variables) {
  ${1:\$requirements = \$variables['requirements'];
  \$severities = array(
    REQUIREMENT_INFO => array(
      'title' => t('Info'),
      'class' => 'info',
    ),
    REQUIREMENT_OK => array(
      'title' => t('OK'),
      'class' => 'ok',
    ),
    REQUIREMENT_WARNING => array(
      'title' => t('Warning'),
      'class' => 'warning',
    ),
    REQUIREMENT_ERROR => array(
      'title' => t('Error'),
      'class' => 'error',
    ),
  );
  \$output = '<table class="system-status-report">';

  foreach (\$requirements as \$requirement) {
    if (empty(\$requirement['#type'])) {
      \$severity = \$severities[isset(\$requirement['severity']) ? (int) \$requirement['severity'] : 0];
      \$severity['icon'] = '<div title="' . \$severity['title'] . '"><span class="element-invisible">' . \$severity['title'] . '</span></div>';

      // Output table row(s)
      if (!empty(\$requirement['description'])) {
        \$output .= '<tr class="' . \$severity['class'] . ' merge-down"><td class="status-icon">' . \$severity['icon'] . '</td><td class="status-title">' . \$requirement['title'] . '</td><td class="status-value">' . \$requirement['value'] . '</td></tr>';
        \$output .= '<tr class="' . \$severity['class'] . ' merge-up"><td colspan="3" class="status-description">' . \$requirement['description'] . '</td></tr>';
      \}
      else {
        \$output .= '<tr class="' . \$severity['class'] . '"><td class="status-icon">' . \$severity['icon'] . '</td><td class="status-title">' . \$requirement['title'] . '</td><td class="status-value">' . \$requirement['value'] . '</td></tr>';
      \}
    \}
  \}

  \$output .= '</table>';
  return \$output;}
}

$2